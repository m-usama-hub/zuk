<?php

namespace App\Imports;

use App\Models\User;
use App\Models\UserBusinessDetail;
use App\Models\UserBusinessService;
use App\Models\UserDetail;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use AppHelper;

class ImportUsersAndBusiness implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $address = $row[4].' '.$row[6].','.$row[5].','.$row[7];

        $fetchAddress = AppHelper::GetLatLongFromAddress($address);
        $data = (object) $fetchAddress['results'][0];

        $user = User::create([
            'name'     => $row[1],
            'email'    => $row[0].'@zuk.com',
            'password' => Hash::make($row[0]),
            'user_type_id' => -10022,
        ]);

        $user->assignRole('User');

        $user->markEmailAsVerified();

        UserDetail::create([
            'user_id' => $user->id,
            'firstname' => $row[1],
            'lastname' => '',
            'email' => $row[0].'@zuk.com',
            'country' => $row[6],
            'city' => $row[5],
            'state' => $row[6],
            'zipcode' => $row[7],
            'address' => $data->formatted_address,
            'details' => $row[10]??'',
            'contact_no' => str_replace('-','',$row[9])
        ]);

        $userBusiness = UserBusinessDetail::create([
            'user_id'     => $user->id,
            "business_name" => $row[1],
            "business_phone" => str_replace('-','',$row[9]),
            "business_details" => $row[10]??'',
            "address" => $data->formatted_address,
            "lat" => $data->geometry['location']['lat'],
            "lng" => $data->geometry['location']['lng']
        ]);

        $services = explode(";",$row[3]);

        foreach ($services as $key => $service) {
            UserBusinessService::create([
                'user_business_detail_id' => $userBusiness->id,
                'service_name' => $service
            ]);
        }



        return $user;
    }
}
