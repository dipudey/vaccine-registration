<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = array(
            array('id' => '1', 'name' => 'Dhaka', 'created_at' => NULL, 'updated_at' => '2021-06-29 15:51:21'),
            array('id' => '2', 'name' => 'Faridpur', 'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:19'),
            array('id' => '3', 'name' => 'Gazipur', 'created_at' => NULL, 'updated_at' => '2021-06-29 15:51:21'),
            array('id' => '4', 'name' => 'Gopalganj', 'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:19'),
            array('id' => '5', 'name' => 'Jamalpur',  'created_at' => NULL, 'updated_at' => '2021-06-29 15:51:21'),
            array('id' => '6', 'name' => 'Kishoreganj', 'created_at' => NULL, 'updated_at' => '2021-07-04 15:53:12'),
            array('id' => '7', 'name' => 'Madaripur', 'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:19'),
            array('id' => '8', 'name' => 'Manikganj', 'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '9', 'name' => 'Munshiganj',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '10', 'name' => 'Mymensingh',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '11', 'name' => 'Narayanganj', 'created_at' => NULL, 'updated_at' => '2021-06-29 16:48:26'),
            array('id' => '12', 'name' => 'Narsingdi', 'created_at' => NULL, 'updated_at' => '2021-07-04 15:26:14'),
            array('id' => '13', 'name' => 'Netrokona',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '14', 'name' => 'Rajbari', 'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '15', 'name' => 'Shariatpur',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '16', 'name' => 'Sherpur',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '17', 'name' => 'Tangail',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '18', 'name' => 'Bogura',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '19', 'name' => 'Joypurhat',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '20', 'name' => 'Naogaon',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '21', 'name' => 'Natore',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '22', 'name' => 'Nawabganj',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '23', 'name' => 'Pabna',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '24', 'name' => 'Rajshahi',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '25', 'name' => 'Sirajgonj',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '26', 'name' => 'Dinajpur',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '27', 'name' => 'Gaibandha',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '28', 'name' => 'Kurigram',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '29', 'name' => 'Lalmonirhat',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '30', 'name' => 'Nilphamari',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '31', 'name' => 'Panchagarh',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '32', 'name' => 'Rangpur',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '33', 'name' => 'Thakurgaon',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '34', 'name' => 'Barguna',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '35', 'name' => 'Barishal',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '36', 'name' => 'Bhola',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '37', 'name' => 'Jhalokati',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '38', 'name' => 'Patuakhali',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '39', 'name' => 'Pirojpur',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '40', 'name' => 'Bandarban',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '41', 'name' => 'Brahmanbaria',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '42', 'name' => 'Chandpur',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '43', 'name' => 'Chattogram',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '44', 'name' => 'Cumilla',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '45', 'name' => 'Cox\'s Bazar',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '46', 'name' => 'Feni',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '47', 'name' => 'Khagrachari',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '48', 'name' => 'Lakshmipur',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '49', 'name' => 'Noakhali',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '50', 'name' => 'Rangamati',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '51', 'name' => 'Habiganj',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '52', 'name' => 'Maulvibazar',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '53', 'name' => 'Sunamganj',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '54', 'name' => 'Sylhet',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '55', 'name' => 'Bagerhat',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '56', 'name' => 'Chuadanga',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '57', 'name' => 'Jashore',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '58', 'name' => 'Jhenaidah',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '59', 'name' => 'Khulna',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '60', 'name' => 'Kushtia', 'created_at' => NULL, 'updated_at' => '2021-06-29 15:51:21'),
            array('id' => '61', 'name' => 'Magura',  'created_at' => NULL, 'updated_at' => '2021-06-29 15:51:21'),
            array('id' => '62', 'name' => 'Meherpur',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:58:20'),
            array('id' => '63', 'name' => 'Narail',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:25:55'),
            array('id' => '64', 'name' => 'Satkhira',  'created_at' => NULL, 'updated_at' => '2021-07-04 15:25:55')
        );

        DB::table("districts")->insert($districts);
    }
}
