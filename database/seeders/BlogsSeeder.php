<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blogs;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = [
            [
                'id'             => 1,
                'title'           => 'We Make Accounting Easy.',
                'summary'          => 'SAHA CPA offers qualitative and cost effective book keeping, accounting, tax and payroll services that are tailored to meet our client business’ needs and goals. We have a dedicated and professional team of Accountants and Tax Professionals who work closely with our clients to ensure that they receive the best personal and quality services available from us.',
                'description'       => 'As a medical practitioner, you are quite busy with your own work. You often don’t have time to manage accounting & tax matters. Our group of experienced accountants & bookkeepers who are dedicated to work for our existing doctors client can help you to reduce the extra burden of keeping books up to date and also handle your CRA matters.',
                'image' => null,
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],
            [
                'id'             => 2,
                'title'           => 'Doctors Accounting.',
                'summary'          => 'As a medical practitioner, you are quite busy with your own work. You often don’t have time to manage accounting & tax matters. Our group of experienced accountants & bookkeepers who are dedicated to work for our existing doctors client can help you to reduce the extra burden of keeping books up to date and also handle your CRA matters.',
                'description'       => 'As a medical practitioner, you are quite busy with your own work. You often don’t have time to manage accounting & tax matters. Our group of experienced accountants & bookkeepers who are dedicated to work for our existing doctors client can help you to reduce the extra burden of keeping books up to date and also handle your CRA matters.',
                'image' => null,
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],
            [
                'id'             => 3,
                'title'           => 'Accounting for Brokers.',
                'summary'          => 'We have been handling books of accounts, trust account reconciliation, payroll & of course CRA and all sorts of tax issues over 18 years. Our division head is a former realtor, and as such he understands your work better than other service providers. We not only take care of your accounting, but also help you to promote your real estate and mortgage business & tax matters. We will also handle your RECO Audit and for this reason we are unique from other accountants for the Realtor and Mortgage brokers.',
                'description'       => 'We have been handling books of accounts, trust account reconciliation, payroll & of course CRA and all sorts of tax issues over 18 years. Our division head is a former realtor, and as such he understands your work better than other service providers. We not only take care of your accounting, but also help you to promote your real estate and mortgage business & tax matters. We will also handle your RECO Audit and for this reason we are unique from other accountants for the Realtor and Mortgage brokers.',
                'image' => null,
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],
            [
                'id'             => 4,
                'title'           => 'Accounting for Small Business.',
                'summary'          => 'We have been providing service to small businesses over a long period of time as most small business owners are struggling with their accounting, payroll and tax issues. Leave your extra work in our experienced hands while you stay focused on growing your business. We also handle your CRA audit for your peace of mind.',
                'description'       => 'Sylhet is one of the oldest city in Bangladesh having a vast historical and cultural background and diversified inhabitants of Garo , Khasia, Monipuri and,Hazong. The district is surrounded by the Jaintia, Khasi and Tripura hills. The city is has a population of 500,000 people having a high population density.',
                'image' => null,
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],

            [
                'id'             => 5,
                'title'           => 'Lawyers Accounting',
                'summary'          => 'As a law practitioner, you need perfect accounting, especially for your Trust account reconciliation. As we know you are busy with your own work. You often don’t have time to manage accounting & tax matters. Our group of experienced accountants & bookkeepers dedicated to our lawyer client can help you.',
                'description'       => 'Pakistan is a country located in South Asia. It has a coastline along the Arabia Sea and the Gulf of Oman and is bordered by Afghanistan, China, India, and Iran. The geography of Pakistan is diverse with the Thar Desert in the east and the Hindu Kush and Pamir mountain ranges in the north.',
                'image' => null,
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],

            [
                'id'             => 6,
                'title'           => 'Taxes at Death or Trustee.',
                'summary'          => 'We handle all types of taxes after death for Trustee or executor. This tax return is complex if not properly handled. Give us a call to learn how we can handle your estate tax return after someone you love has passed on.',
                'description'       => 'Pakistan is a country located in South Asia. It has a coastline along the Arabia Sea and the Gulf of Oman and is bordered by Afghanistan, China, India, and Iran. The geography of Pakistan is diverse with the Thar Desert in the east and the Hindu Kush and Pamir mountain ranges in the north.',
                'image' => null,
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],

        ];

        Blogs::insert($blogs);

    }
}
