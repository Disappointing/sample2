<?php

use Illuminate\Database\Seeder;
use App\Models\SjWg;
use App\Models\ZjWg;
use App\Models\CjWg;

class SjWgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = app(Faker\Generator::class);
        $SjWgs= factory(SjWg::class)->times(50)->make();
        SjWg::insert($SjWgs->toArray());

        $SjWgs=SjWg::all();
        $SjWg_ids=$SjWgs->pluck('id')->toArray();
        $ZjWgs= factory(ZjWg::class)->times(50)->make()->each(function ($ZjWg) use ($faker,$SjWg_ids) {
           $ZjWg->sj_wg_id = $faker->randomElement($SjWg_ids);
        });
        ZjWg::insert($ZjWgs->toArray());

        $ZjWgs=ZjWg::all();
        $ZjWg_ids=$ZjWgs->pluck('id')->toArray();
        $CjWgs= factory(CjWg::class)->times(50)->make()->each(function ($CjWg) use ($faker,$ZjWg_ids) {
            $CjWg->Zj_wg_id = $faker->randomElement($ZjWg_ids);
        });
        CjWg::insert($CjWgs->toArray());
    }
}
