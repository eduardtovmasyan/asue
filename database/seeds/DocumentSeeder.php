<?php

use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documents = [
            'Տեղեկանք', 'Շրջիկ թերթիկ', 'Ակադեմիական',
        ];

        foreach ($documents as $doc) {
            DB::table('lms_documents')->insert([
                'name' => $doc,
            ]);
        }
    }
}
