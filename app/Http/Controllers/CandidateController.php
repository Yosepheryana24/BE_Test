<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Helper;
use App\Candidate;
use App\CandidateOrg;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
    //
    public function index()
    {

        $candidate = Candidate::select('candidate.name AS full_name', 'candidate.gender', 'candidate.city_of_birth', 'candidate.date_of_birth', 'religion_id', 'candidate.email', 'candidate.phone', 'candidate.identity_number', 'candidate.identity_file', 'candidate.bank_account', 'candidate.bank_name', 'candidate.address', 'education.name AS education', 'university.name as university_name', 'candidate.university_other', 'candidate.major', 'candidate.graduation_year', 'candidate.in_college', 'candidate.semester', 'candidate.skill', 'candidate.file_cv', 'candidate.file_photo', 'candidate.file_portfolio', 'source_information.name AS source_information', 'candidate.source_information_other', 'candidate.ranking', 'candidate.assessment_score', 'candidate.mail_sent', 'candidate.instagram', 'candidate.twitter', 'candidate.linkedin', 'candidate.facebook', 'candidate.created_at', 'candidate_organization.org_name', 'candidate_organization.year', 'candidate_organization.position', 'candidate_organization.description', 'candidate_organization.file')->join('education', 'education.id', 'candidate.education_id')->join('university', 'candidate.university_id', 'university.id')->join('source_information', 'candidate.source_information_id', 'source_information.id')->join('candidate_organization', 'candidate.id', 'candidate_organization.candidate_id')->paginate(5);

        if ($candidate === null) {
            return response()->json([
                "code" => 404,
                "message" => "Data Not Found"
            ], 404);
        }
        return response()->json([
            "code" => 200,
            "message" => "success",
            "data" => $candidate
        ], 200);
        // dd($candidate);
    }

    public function show(Request $req, $id)
    {
        //$candidate = DB::connection('mysql')->table('candidate')->get();
        // $candidate = array();
        //$candidate = new Candidate();
        $candidate = Candidate::select('candidate.name AS full_name', 'candidate.gender', 'candidate.city_of_birth', 'candidate.date_of_birth', 'religion_id', 'candidate.email', 'candidate.phone', 'candidate.identity_number', 'candidate.identity_file', 'candidate.bank_account', 'candidate.bank_name', 'candidate.address', 'education.name AS education', 'university.name as university_name', 'candidate.university_other', 'candidate.major', 'candidate.graduation_year', 'candidate.in_college', 'candidate.semester', 'candidate.skill', 'candidate.file_cv', 'candidate.file_photo', 'candidate.file_portfolio', 'source_information.name AS source_information', 'candidate.source_information_other', 'candidate.ranking', 'candidate.assessment_score', 'candidate.mail_sent', 'candidate.instagram', 'candidate.twitter', 'candidate.linkedin', 'candidate.facebook', 'candidate.created_at', 'candidate_organization.org_name', 'candidate_organization.year', 'candidate_organization.position', 'candidate_organization.description', 'candidate_organization.file')->join('education', 'education.id', 'candidate.education_id')->join('university', 'candidate.university_id', 'university.id')->join('source_information', 'candidate.source_information_id', 'source_information.id')->join('candidate_organization', 'candidate.id', 'candidate_organization.candidate_id')->where('candidate.id', $id)->first();
        // dd($candidate);
        if ($candidate === null) {
            return response()->json([
                "code" => 404,
                "message" => "Data Not Found"
            ], 404);
        }
        return response()->json([
            "code" => 200,
            "message" => "success",
            "data" => $candidate
        ], 200);
        // dd($candidate);
    }

    public function store(Request $req)
    {
        $validation = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'gender' => 'required|max:255',
            'city_of_birth' => 'required|max:255',
            'date_of_birth' => 'required',
            'religion_id' => 'required',
            'email' => 'required|email|max:255',
            'phone' => 'required|min:11',
            'identity_number' => 'required|max:255',
            'bank_id' => 'required',
            'bank_account' => 'required',
            'bank_name' => 'required',
            'address' => 'required',
            'education_id' => 'required',
            'major' => 'required',
            'skill' => 'required',
            'file_cv' => 'required|max:2048',
            'file_photo' => 'requiredimage|mimes:jpeg,png,jpg|max:2048',
            'file_portfolio' => 'requiredimage|mimes:jpeg,png,jpg|max:2048',
            'mail_sent' => 'required',
            'candidate_status_id' => 'required',
            'org_name' => 'required',
            'year' => 'required',
            'position' => 'required',
            'description' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->messages(), 'status' => 400]);
        }

        //   dd($validation);
        // $model = new Candidate();
        // $model->name        =   $req->name;

        $path  = "public/kandidat";
        //  dd($path);
        if ($file = $req->file('file_cv')) {
            $name       = 'cv.' . '-' . Carbon::now()->toDateString();
            $check_file = 'null';

            $cv = Helper::uploadImg($check_file, $file, $path, $name);
        } else {
            $cv = null;
        }
        if ($file = $req->file('identity_file')) {
            $name       = 'identity.' . '-' . Carbon::now()->toDateString();
            $check_file = 'null';

            $identity = Helper::uploadImg($check_file, $file, $path, $name);
        } else {
            $identity = null;
        }

        if ($file = $req->file('file_photo')) {
            $name       = 'photo.' . '-' . Carbon::now()->toDateString();
            $check_file = 'null';

            $photo = Helper::uploadImg($check_file, $file, $path, $name);
        } else {
            $photo = null;
        }

        if ($file = $req->file('file_portfolio')) {
            $name       = 'portofolio.' . '-' . Carbon::now()->toDateString();
            $check_file = 'null';

            $portofolio = Helper::uploadImg($check_file, $file, $path, $name);
        } else {
            $portofolio = null;
        }

        if ($file = $req->file('file')) {
            $name       = 'file.' . '-' . Carbon::now()->toDateString();
            $check_file = 'null';

            $file = Helper::uploadImg($check_file, $file, $path, $name);
        } else {
            $file = null;
        }
        $data = array(
            "name" => $req->input("name"),
            "gender" => $req->input("gender"),
            'city_of_birth' => $req->input("city_of_birth"),
            'date_of_birth' => $req->input("date_of_birth"),
            'religion_id' => $req->input("religion_id"),
            'email' => $req->input("email"),
            'phone' => $req->input("phone"),
            'identity_number' => $req->input("nomor_ktp"),
            'identity_file' => $identity,
            'bank_id' => $req->input("bank_id"),
            'bank_account' => $req->input("bank_account"),
            'bank_name' => $req->input("bank_name"),
            'address' => $req->input("address"),
            'education_id' => $req->input("education_id"),
            'university_id' => $req->input("university_id"),
            'university_other' => $req->input("university_other"),
            'major' => $req->input("major"),
            'graduation_year' => $req->input("graduation_year"),
            'in_college' => $req->input("in_college"),
            'semester' => $req->input("semester"),
            'skill' => $req->input("skill"),
            'file_cv' => $cv,
            'file_photo' => $photo,
            'file_portfolio' => $portofolio,
            'source_information_id' => $req->input("source_information_id"),
            'source_information_other' => $req->input("source_information_other"),
            'ranking' => $req->input("ranking"),
            'assessment_score' => $req->input("assessment_score"),
            'mail_sent' => $req->input("mail_sent"),
            'instagram' => $req->input("instagram"),
            'twitter' => $req->input("twitter"),
            'linkedin' => $req->input("linkedin"),
            'facebook' => $req->input("facebook"),
            'candidate_status_id' => $req->input("candidate_status_id"),
            'created_at' => Carbon::now()
        );

        // if ($data === '[]') {
        //     return response()->json([
        //         "code" => 404,
        //         "message" => "Please Input Data"
        //     ], 404);
        // }

        $candidate = Candidate::create($data);

        $data_org = array(
            "candidate_id" => $candidate->id,
            "org_name" => $req->input("org_name"),
            "year" => $req->input("year"),
            "position" => $req->input("position"),
            "description" => $req->input("description"),
            "file" => $file,
            "created_at" => Carbon::now()
        );
        $candidate_org = CandidateOrg::create($data_org);

        return response()->json([
            "code" => 200,
            "message" => "success",
            "data" => array_merge($data, $data_org)
        ], 200);
        // dd($candidate);
    }
    public function update(Request $req, $id)
    {
        $validation = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'gender' => 'required|max:255',
            'city_of_birth' => 'required|max:255',
            'date_of_birth' => 'required',
            'religion_id' => 'required',
            'email' => 'required|email|max:255',
            'phone' => 'required|min:11',
            'identity_number' => 'required|max:255',
            'identity_file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'bank_id' => 'required',
            'bank_account' => 'required',
            'bank_name' => 'required',
            'address' => 'required',
            'education_id' => 'required',
            'major' => 'required',
            'skill' => 'required',
            'file_cv' => 'required|max:2048',
            'file_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'file_portfolio' => 'required|max:2048',
            'mail_sent' => 'required',
            'candidate_status_id' => 'required',
            'org_name' => 'required',
            'year' => 'required',
            'position' => 'required',
            'description' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $path  = 'public/kandidat/';

        if ($file = $req->file('file_cv')) {
            $name       = 'cv.' . '-' . Carbon::now()->toDateString();
            $check_file = 'null';

            $cv = Helper::uploadImg($check_file, $file, $path, $name);
        } else {
            $cv = null;
        }

        if ($file = $req->file('identity_file')) {
            $name       = 'identity.' . '-' . Carbon::now()->toDateString();
            $check_file = 'null';

            $identity = Helper::uploadImg($check_file, $file, $path, $name);
        } else {
            $identity = null;
        }

        if ($file = $req->file('file_photo')) {
            $name       = 'photo.' . '-' . Carbon::now()->toDateString();
            $check_file = 'null';

            $photo = Helper::uploadImg($check_file, $file, $path, $name);
        } else {
            $photo = null;
        }

        if ($file = $req->file('file_portfolio')) {
            $name       = 'portofolio.' . '-' . Carbon::now()->toDateString();
            $check_file = 'null';

            $portofolio = Helper::uploadImg($check_file, $file, $path, $name);
        } else {
            $portofolio = null;
        }

        if ($file = $req->file('file')) {
            $name       = 'file.' . '-' . Carbon::now()->toDateString();
            $check_file = 'null';

            $file = Helper::uploadImg($check_file, $file, $path, $name);
        } else {
            $file = null;
        }

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->messages(), 'status' => 400]);
        }

        $c = Candidate::where('id', $id)->first();
        //   $candidate = Candidate::get();
        $data = array(
            "name" => empty($req->input("name")) ? $c->name : $req->input("name"),
            "gender" => empty($req->input("gender")) ? $c->gender : $req->input("gender"),
            'city_of_birth' => empty($req->input("city_of_birth")) ? $c->city_of_birth : $req->input("city_of_birth"),
            'date_of_birth' => empty($req->input("date_of_birth")) ? $c->date_of_birth : $req->input("date_of_birth"),
            'religion_id' => empty($req->input("religion_id")) ? $c->religion_id : $req->input("religion_id"),
            'email' => empty($req->input("email")) ? $c->email : $req->input("email"),
            'phone' => empty($req->input("phone")) ? $c->phone : $req->input("phone"),
            'identity_number' => empty($req->input("identity_number")) ? $c->identity_number : $req->input("identity_number"),
            'identity_file' => $identity,
            'bank_id' => empty($req->input("bank_id")) ? $c->bank_id : $req->input("bank_id"),
            'bank_account' => empty($req->input("bank_account")) ? $c->bank_account : $req->input("bank_account"),
            'bank_name' => empty($req->input("bank_name")) ? $c->bank_name : $req->input("bank_name"),
            'address' => empty($req->input("address")) ? $c->address : $req->input("address"),
            'education_id' => empty($req->input("education_id")) ? $c->education_id : $req->input("education_id"),
            'university_id' => empty($req->input("university_id")) ? $c->university_id : $req->input("university_id"),
            'university_other' => empty($req->input("university_other")) ? $c->university_other : $req->input("university_other"),
            'major' => empty($req->input("major")) ? $c->major : $req->input("major"),
            'graduation_year' => empty($req->input("graduation_year")) ? $c->graduation_year : $req->input("graduation_year"),
            'in_college' => empty($req->input("in_college")) ? $c->in_college : $req->input("in_college"),
            'semester' => empty($req->input("semester")) ? $c->semester : $req->input("semester"),
            'skill' => empty($req->input("skill")) ? $c->skill : $req->input("skill"),
            'file_cv' => $cv,
            'file_photo' => $photo,
            'file_portfolio' => $portofolio,
            'source_information_id' => empty($req->input("source_information_id")) ? $c->source_information_id : $req->input("source_information_id"),
            'source_information_other' => empty($req->input("source_information_other")) ? $c->source_information_other : $req->input("source_information_other"),
            'ranking' => empty($req->input("ranking")) ? $c->ranking : $req->input("ranking"),
            'assessment_score' => empty($req->input("assessment_score")) ? $c->assessment_score : $req->input("assessment_score"),
            'mail_sent' => empty($req->input("mail_sent")) ? $c->mail_sent : $req->input("mail_sent"),
            'instagram' => empty($req->input("instagram")) ? $c->instagram : $req->input("instagram"),
            'twitter' => empty($req->input("twitter")) ? $c->twitter : $req->input("twitter"),
            'linkedin' => empty($req->input("linkedin")) ? $c->linkedin : $req->input("linkedin"),
            'facebook' => empty($req->input("facebook")) ? $c->facebook : $req->input("facebook"),
            'candidate_status_id' => empty($req->input("candidate_status_id")) ? $c->candidate_status_id : $req->input("candidate_status_id"),
            'updated_at' => Carbon::now()
        );

        $cOrg =  CandidateOrg::where('candidate_id', $id)->first();
        $data_org = array(
            "org_name" => empty($req->input("org_name")) ? $cOrg->org_name : $req->input("org_name"),
            "year" => empty($req->input("year")) ? $cOrg->year : $req->input("year"),
            "position" => empty($req->input("position")) ? $cOrg->position : $req->input("position"),
            "description" => empty($req->input("description")) ? $cOrg->description : $req->input("description"),
            "file" => $file,
            "updated_at" => Carbon::now()
        );

        // if ($c === '[]') {
        //     return response()->json([
        //         "code" => 404,
        //         "message" => "Data Not Found"
        //     ], 404);
        // }

        try {
            DB::connection('mysql')->beginTransaction();
            Candidate::where('id', $id)->update($data);
            CandidateOrg::where('candidate_id', $id)->update($data_org);
            return response()->json([
                "code" => 200,
                "message" => "success",
                "data" => array_merge($data, $data_org)
            ], 200);
        } catch (\Exception $e) {
            $err = DB::connection('mysql')->rollback();
            return response()->json([
                'code'    => 501,
                'status'  => 'error',
                'message' => $err
            ], 501);
        }
    }
}
