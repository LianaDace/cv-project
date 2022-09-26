<?php

namespace App\Http\Livewire;

use App\Models\Resume;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CreateResume extends Component
{
    public $currentPage = 1;
    public $success;

    // Form properties
    public $name;
    public $email;
    public $phone;
    public $city;
    public $postal_code;
    public $school_name;
    public $field_of_study;
    public $degree;
    public $graduation_start_date;
    public $graduation_date;
    public $job_title;
    public $workplace;
    public $occupation;
    public $job_description;
    public $work_load;
    public $start_date;
    public $end_date;
    public $hobbies;
    public $interests;
    public $about;



    public $pages = [
        1 => [
            'heading' => 'Personas dati',
            'subheading' => 'Ievadi datus par sevi.',
        ],
        2 => [
            'heading' => 'Izglītība',
            'subheading' => 'Ievadi datus par izglītību.',
        ],
        3 => [
            'heading' => 'Darba pieredze',
            'subheading' => 'Pastāsti par savu darba pieredzi.',
        ],
        4 => [
            'heading' => 'Par mani',
            'subheading' => 'Pastāsti mazliet par sevi.',
        ],
    ];

    private $validationRules = [
        1 => [
            'name' => ['required', 'min:3'],
            'phone' => ['required', 'min:8']
        ],
        2 => [
            'school_name' => ['required', 'min:10'],
        ],
        3 => [
            'job_title' => ['required']
        ],
        4 => [
            'about' => ['required', 'string', 'min:70'],
        ],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    }

    public function goToNextPage()
    {
        $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function submit(Request $request)
    {
        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);

        Resume::create([
            'user_id' => auth()->id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'school_name' => $this->school_name,
            'field_of_study' => $this->field_of_study,
            'degree' => $this->degree,
            'graduation_start_date' => $this->graduation_start_date,
            'graduation_date' => $this->graduation_date,
            'job_title' => $this->job_title,
            'workplace' => $this->workplace,
            'job_description' => $this->job_description,
            'work_load' => $this->work_load,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'hobbies' => $this->hobbies,
            'interests' => $this->interests,
            'about' => $this->about


        ]);

        $this->reset();
        $this->resetValidation();

        $this->success = 'Resume created successfully!';
    }

    public function render()
    {
        return view('livewire.create-user-form');
    }

    public function list()
    {
        $lists = Resume::all()->where('user_id', Auth::id());

        return view('resume.list', ['lists' => $lists]);
    }

    public function show($id)
    {
        $resume = Resume::find($id);

        return view('resume.show', ['resume' => $resume]);
    }

    public function edit($id)
    {
        $resume = Resume::find($id);

        return view('resume.edit', ['resume' => $resume]);
    }

    public function update(Request $request, $id)
    {
        $resume = Resume::find($id);
        $resume->update($request->all());
        return redirect('/list');

    }

    public function destroy($id)
    {
        $resume = Resume::find($id);
        $resume->delete();
        return redirect('/list');
        //return Resume::destroy($id);
    }

    public function download($id)
    {
        $resume = Resume::find($id);
        $pdf = Pdf::loadView('resume.download', ['resume' => $resume]);
        return $pdf->download('CV.pdf');
    }

}
