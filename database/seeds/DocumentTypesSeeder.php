<?php

use Illuminate\Database\Seeder;

class DocumentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctypes = [
            ['document_id' => 11, 'name' => 'Ուսանողի հիմնական'],
            ['document_id' => 11, 'name' => 'Բանկ'],
            ['document_id' => 11, 'name' => 'ՍԾՏԿ և փարոս'],
            ['document_id' => 11, 'name' => 'Զին. կոմիսարիատ'],
            ['document_id' => 11, 'name' => 'Բուհեր'],
            ['document_id' => 11, 'name' => 'Ակադեմիական առաջադիմություն'],
            ['document_id' => 11, 'name' => 'Տեղեկանքի ստեղծման մոդուլ'],
            ['document_id' => 11, 'name' => 'Ավարտական'],
            ['document_id' => 11, 'name' => 'Աշխատանքային'],
            ['document_id' => 11, 'name' => 'Փոխանակման'],
            ['document_id' => 12, 'name' => 'շրջիկ_1'],
            ['document_id' => 12, 'name' => 'շրջիկ_2'],
            ['document_id' => 12, 'name' => 'շրջիկ_3'],
            ['document_id' => 13, 'name' => 'Ակադեմիական_1'],
            ['document_id' => 13, 'name' => 'Ակադեմիական_2'],
            ['document_id' => 13, 'name' => 'Ակադեմիական_3'],
        ];

        foreach ($doctypes as $doctype) {
            DB::table('lms_document_type')->insert([
                'document_id' => $doctype['document_id'],
                'name' => $doctype['name'],
            ]);
        }
    }
}
