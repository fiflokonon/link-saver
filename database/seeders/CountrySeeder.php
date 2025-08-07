<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'Algérie', 'code' => 'DZ', 'continent_id' => 1, 'flag' => 'flags/dz.png'],
            ['name' => 'Angola', 'code' => 'AO', 'continent_id' => 1, 'flag' => 'flags/ao.png'],
            ['name' => 'Bénin', 'code' => 'BJ', 'continent_id' => 1, 'flag' => 'flags/bj.png'],
            ['name' => 'Botswana', 'code' => 'BW', 'continent_id' => 1, 'flag' => 'flags/bw.png'],
            ['name' => 'Burkina Faso', 'code' => 'BF', 'continent_id' => 1, 'flag' => 'flags/bf.png'],
            ['name' => 'Burundi', 'code' => 'BI', 'continent_id' => 1, 'flag' => 'flags/bi.png'],
            ['name' => 'Cabo Verde', 'code' => 'CV', 'continent_id' => 1, 'flag' => 'flags/cv.png'],
            ['name' => 'Cameroun', 'code' => 'CM', 'continent_id' => 1, 'flag' => 'flags/cm.png'],
            ['name' => 'Congo-Brazzaville', 'code' => 'CG', 'continent_id' => 1, 'flag' => 'flags/cg.png'],
            ['name' => 'Congo-Kinshasa', 'code' => 'CD', 'continent_id' => 1, 'flag' => 'flags/cd.png'],
            ['name' => 'Côte d\'Ivoire', 'code' => 'CI', 'continent_id' => 1, 'flag' => 'flags/ci.png'],
            ['name' => 'Djibouti', 'code' => 'DJ', 'continent_id' => 1, 'flag' => 'flags/dj.png'],
            ['name' => 'Égypte', 'code' => 'EG', 'continent_id' => 1, 'flag' => 'flags/eg.png'],
            ['name' => 'Érythrée', 'code' => 'ER', 'continent_id' => 1, 'flag' => 'flags/er.png'],
            ['name' => 'Eswatini', 'code' => 'SZ', 'continent_id' => 1, 'flag' => 'flags/sz.png'],
            ['name' => 'Éthiopie', 'code' => 'ET', 'continent_id' => 1, 'flag' => 'flags/et.png'],
            ['name' => 'Gabon', 'code' => 'GA', 'continent_id' => 1, 'flag' => 'flags/ga.png'],
            ['name' => 'Gambie', 'code' => 'GM', 'continent_id' => 1, 'flag' => 'flags/gm.png'],
            ['name' => 'Ghana', 'code' => 'GH', 'continent_id' => 1, 'flag' => 'flags/gh.png'],
            ['name' => 'Guinée', 'code' => 'GN', 'continent_id' => 1, 'flag' => 'flags/gn.png'],
            ['name' => 'Guinée-Bissau', 'code' => 'GW', 'continent_id' => 1, 'flag' => 'flags/gw.png'],
            ['name' => 'Kenya', 'code' => 'KE', 'continent_id' => 1, 'flag' => 'flags/ke.png'],
            ['name' => 'Lesotho', 'code' => 'LS', 'continent_id' => 1, 'flag' => 'flags/ls.png'],
            ['name' => 'Liberia', 'code' => 'LR', 'continent_id' => 1, 'flag' => 'flags/lr.png'],
            ['name' => 'Libye', 'code' => 'LY', 'continent_id' => 1, 'flag' => 'flags/ly.png'],
            ['name' => 'Madagascar', 'code' => 'MG', 'continent_id' => 1, 'flag' => 'flags/mg.png'],
            ['name' => 'Malawi', 'code' => 'MW', 'continent_id' => 1, 'flag' => 'flags/mw.png'],
            ['name' => 'Mali', 'code' => 'ML', 'continent_id' => 1, 'flag' => 'flags/ml.png'],
            ['name' => 'Maurice', 'code' => 'MU', 'continent_id' => 1, 'flag' => 'flags/mu.png'],
            ['name' => 'Mauritanie', 'code' => 'MR', 'continent_id' => 1, 'flag' => 'flags/mr.png'],
            ['name' => 'Maroc', 'code' => 'MA', 'continent_id' => 1, 'flag' => 'flags/ma.png'],
            ['name' => 'Mozambique', 'code' => 'MZ', 'continent_id' => 1, 'flag' => 'flags/mz.png'],
            ['name' => 'Namibie', 'code' => 'NA', 'continent_id' => 1, 'flag' => 'flags/na.png'],
            ['name' => 'Niger', 'code' => 'NE', 'continent_id' => 1, 'flag' => 'flags/ne.png'],
            ['name' => 'Nigeria', 'code' => 'NG', 'continent_id' => 1, 'flag' => 'flags/ng.png'],
            ['name' => 'Ouganda', 'code' => 'UG', 'continent_id' => 1, 'flag' => 'flags/ug.png'],
            ['name' => 'Sao Tomé-et-Principe', 'code' => 'ST', 'continent_id' => 1, 'flag' => 'flags/st.png'],
            ['name' => 'Sénégal', 'code' => 'SN', 'continent_id' => 1, 'flag' => 'flags/sn.png'],
            ['name' => 'Seychelles', 'code' => 'SC', 'continent_id' => 1, 'flag' => 'flags/sc.png'],
            ['name' => 'Sierra Leone', 'code' => 'SL', 'continent_id' => 1, 'flag' => 'flags/sl.png'],
            ['name' => 'Somalie', 'code' => 'SO', 'continent_id' => 1, 'flag' => 'flags/so.png'],
            ['name' => 'Soudan', 'code' => 'SD', 'continent_id' => 1, 'flag' => 'flags/sd.png'],
            ['name' => 'Soudan du Sud', 'code' => 'SS', 'continent_id' => 1, 'flag' => 'flags/ss.png'],
            ['name' => 'Tchad', 'code' => 'TD', 'continent_id' => 1, 'flag' => 'flags/td.png'],
            ['name' => 'Togo', 'code' => 'TG', 'continent_id' => 1, 'flag' => 'flags/tg.png'],
            ['name' => 'Tunisie', 'code' => 'TN', 'continent_id' => 1, 'flag' => 'flags/tn.png'],
            ['name' => 'Zambie', 'code' => 'ZM', 'continent_id' => 1, 'flag' => 'flags/zm.png'],
            ['name' => 'Zimbabwe', 'code' => 'ZW', 'continent_id' => 1, 'flag' => 'flags/zw.png'],
            // Ajout de l'Afrique du Sud
            ['name' => 'Afrique du Sud', 'code' => 'ZA', 'continent_id' => 1, 'flag' => 'flags/za.png'],
        ];

        foreach ($countries as $countryData) {
            $country = Country::create([
                'name' => $countryData['name'],
                'code' => $countryData['code'],
                'continent_id' => $countryData['continent_id'],
            ]);

            $flagPath = public_path("{$countryData['flag']}");

            if (file_exists($flagPath)) {
                $country
                    ->addMedia($flagPath)
                    ->preservingOriginal()
                    ->toMediaCollection('flags');
            } else {
                $this->command->warn("Drapeau non trouvé pour : {$countryData['name']} ({$countryData['flag']})");
            }
        }
    }

}
