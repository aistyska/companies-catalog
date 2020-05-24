<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Validation\Rule;
use phpDocumentor\Reflection\Types\Compound;

class CompanyController extends Controller
{
    public function search(Request $request) {
        if ($request->has('company')) {
            $request->validate([
                'company' => ['min:3']
            ]);
            $results = Company::where('title', 'like', '%' . $request->input('company') . '%')
                ->orWhere('code', 'like', '%' . $request->input('company') . '%')
                ->orderBy('title', 'asc')
                ->paginate(6);
            return view('pages.home', [
                'searchInput' => $request->input('company'),
                'results' => $results
            ]);
        }
        return view('pages.home');
    }

    public function allCompanies() {
        $companies = Company::orderBy('title', 'asc')->paginate(6);
        return view('pages.all-companies', ['companies' => $companies]);
    }

    public function oneCompany(Company $company) {
        return view('pages.one-company', ['company' => $company]);
    }


    public function addCompany() {
        return view('pages.add-company');
    }

    public function storeCompany(Request $request) {
        $request->validate([
            'company' => ['required', 'max:255', 'unique:App\Company,title'],
            'code' => ['required', 'digits:9', 'unique:App\Company,code'],
            'pvmCode' => ['required', 'max:20', 'unique:App\Company,pvm_code'],
            'address' => ['required', 'max:255'],
            'phone' => ['required', 'starts_with:+'],
            'email' => ['required', 'email', 'max:255'],
            'about' => ['required', 'max:1000'],
            'director' => ['required', 'max:255']
        ]);

        Company::create([
            'title' => $request->input('company'),
            'code' => $request->input('code'),
            'pvm_code' => $request->input('pvmCode'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'about'=> $request->input('about'),
            'director' => $request->input('director')
        ]);
        return redirect('/all-companies');
    }


    public function editCompany(Company $company) {
        return view('pages.edit-company', ['company' => $company]);
    }


    public function updateCompany(Request $request, Company $company) {
        $request->validate([
            'company' => ['required', 'max:255', Rule::unique('companies', 'title')->ignore($company)],
            'code' => ['required', 'digits:9', Rule::unique('companies')->ignore($company)],
            'pvmCode' => ['required', 'max:20', Rule::unique('companies', 'pvm_code')->ignore($company)],
            'address' => ['required', 'max:255'],
            'phone' => ['required', 'starts_with:+'],
            'email' => ['required', 'email', 'max:255'],
            'about' => ['required', 'max:1000'],
            'director' => ['required', 'max:255']
        ]);

        $company->update([
            'title' => $request->input('company'),
            'code' => $request->input('code'),
            'pvm_code' => $request->input('pvmCode'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'about'=> $request->input('about'),
            'director' => $request->input('director')
        ]);

        return redirect('/company/'.$company->id);
    }

    public function delete(Company $company) {
        $company->delete();
        return redirect('/all-companies');
    }

}
