<?php

namespace Database\Seeders;

use App\Models\Governorate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GovernorateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      //  DB::table('governorates')->truncate();


        $governorates = [

            [
                'id' => 1,
                'country_id' => 1,
                'name' => ['en' => 'Damascus', 'ar' => 'دمشق'],
            ],

            [
                'id' => 2,
                'country_id' => 1,
                'name' => ['en' => 'Rif Dimashq', 'ar' => 'ريف دمشق'],
            ],

            [
                'id' => 3,
                'country_id' => 1,
                'name' => ['en' => 'Aleppo', 'ar' => 'حلب'],
            ],

            [
                'id' => 4,
                'country_id' => 1,
                'name' => ['en' => 'Homs', 'ar' => 'حمص'],
            ],

            [
                'id' => 5,
                'country_id' => 1,
                'name' => ['en' => 'Hama', 'ar' => 'حماة'],
            ],

            [
                'id' => 6,
                'country_id' => 1,
                'name' => ['en' => 'Latakia', 'ar' => 'اللاذقية'],
            ],

            [
                'id' => 7,
                'country_id' => 1,
                'name' => ['en' => 'Tartus', 'ar' => 'طرطوس'],
            ],

            [
                'id' => 8,
                'country_id' => 1,
                'name' => ['en' => 'Deir ez-Zor', 'ar' => 'دير الزور'],
            ],

            [
                'id' => 9,
                'country_id' => 1,
                'name' => ['en' => 'Al-Hasakah', 'ar' => 'الحسكة'],
            ],

            [
                'id' => 10,
                'country_id' => 1,
                'name' => ['en' => 'Raqqa', 'ar' => 'الرقة'],
            ],

            [
                'id' => 11,
                'country_id' => 1,
                'name' => ['en' => 'Idlib', 'ar' => 'إدلب'],
            ],

            [
                'id' => 12,
                'country_id' => 1,
                'name' => ['en' => 'Daraa', 'ar' => 'درعا'],
            ],

            [
                'id' => 13,
                'country_id' => 1,
                'name' => ['en' => 'As-Suwayda', 'ar' => 'السويداء'],
            ],

            [
                'id' => 14,
                'country_id' => 1,
                'name' => ['en' => 'Quneitra', 'ar' => 'القنيطرة'],
            ],

            [
                'id' => 15,
                'country_id' => 2,
                'name' => ['en' => 'Adana', 'ar' => 'أضنة'],
            ],

            [
                'id' => 16,
                'country_id' => 2,
                'name' => ['en' => 'Adiyaman', 'ar' => 'أديامان'],
            ],

            [
                'id' => 17,
                'country_id' => 2,
                'name' => ['en' => 'Afyonkarahisar', 'ar' => 'أفيون قرة حصار'],
            ],

            [
                'id' => 18,
                'country_id' => 2,
                'name' => ['en' => 'Agri', 'ar' => 'آغري'],
            ],

            [
                'id' => 19,
                'country_id' => 2,
                'name' => ['en' => 'Aksaray', 'ar' => 'أكساراي'],
            ],

            [
                'id' => 20,
                'country_id' => 2,
                'name' => ['en' => 'Amasya', 'ar' => 'أماسيا'],
            ],

            [
                'id' => 21,
                'country_id' => 2,
                'name' => ['en' => 'Ankara', 'ar' => 'أنقرة'],
            ],

            [
                'id' => 22,
                'country_id' => 2,
                'name' => ['en' => 'Antalya', 'ar' => 'أنطاليا'],
            ],

            [
                'id' => 23,
                'country_id' => 2,
                'name' => ['en' => 'Ardahan', 'ar' => 'أرداهان'],
            ],

            [
                'id' => 24,
                'country_id' => 2,
                'name' => ['en' => 'Artvin', 'ar' => 'أرتفين'],
            ],

            [
                'id' => 25,
                'country_id' => 2,
                'name' => ['en' => 'Aydin', 'ar' => 'أيدن'],
            ],

            [
                'id' => 26,
                'country_id' => 2,
                'name' => ['en' => 'Balikesir', 'ar' => 'باليكسير'],
            ],

            [
                'id' => 27,
                'country_id' => 2,
                'name' => ['en' => 'Bartin', 'ar' => 'بارتين'],
            ],

            [
                'id' => 28,
                'country_id' => 2,
                'name' => ['en' => 'Batman', 'ar' => 'باتمان'],
            ],

            [
                'id' => 29,
                'country_id' => 2,
                'name' => ['en' => 'Bayburt', 'ar' => 'بايبورت'],
            ],

            [
                'id' => 30,
                'country_id' => 2,
                'name' => ['en' => 'Bilecik', 'ar' => 'بيلجيك'],
            ],

            [
                'id' => 31,
                'country_id' => 2,
                'name' => ['en' => 'Bingol', 'ar' => 'بينغول'],
            ],

            [
                'id' => 32,
                'country_id' => 2,
                'name' => ['en' => 'Bitlis', 'ar' => 'بتليس'],
            ],

            [
                'id' => 33,
                'country_id' => 2,
                'name' => ['en' => 'Bolu', 'ar' => 'بولو'],
            ],

            [
                'id' => 34,
                'country_id' => 2,
                'name' => ['en' => 'Burdur', 'ar' => 'بوردور'],
            ],

            [
                'id' => 35,
                'country_id' => 2,
                'name' => ['en' => 'Bursa', 'ar' => 'بورصة'],
            ],

            [
                'id' => 36,
                'country_id' => 2,
                'name' => ['en' => 'Canakkale', 'ar' => 'جاناك قلعة'],
            ],

            [
                'id' => 37,
                'country_id' => 2,
                'name' => ['en' => 'Cankiri', 'ar' => 'جانقيري'],
            ],

            [
                'id' => 38,
                'country_id' => 2,
                'name' => ['en' => 'Corum', 'ar' => 'تشوروم'],
            ],

            [
                'id' => 39,
                'country_id' => 2,
                'name' => ['en' => 'Denizli', 'ar' => 'دنيزلي'],
            ],

            [
                'id' => 40,
                'country_id' => 2,
                'name' => ['en' => 'Diyarbakir', 'ar' => 'ديار بكر'],
            ],

            [
                'id' => 41,
                'country_id' => 2,
                'name' => ['en' => 'Duzce', 'ar' => 'دوزجة'],
            ],

            [
                'id' => 42,
                'country_id' => 2,
                'name' => ['en' => 'Edirne', 'ar' => 'أدرنة'],
            ],

            [
                'id' => 43,
                'country_id' => 2,
                'name' => ['en' => 'Elazig', 'ar' => 'إيلازيغ'],
            ],

            [
                'id' => 44,
                'country_id' => 2,
                'name' => ['en' => 'Erzincan', 'ar' => 'أرزنجان'],
            ],

            [
                'id' => 45,
                'country_id' => 2,
                'name' => ['en' => 'Erzurum', 'ar' => 'أرضروم'],
            ],

            [
                'id' => 46,
                'country_id' => 2,
                'name' => ['en' => 'Eskisehir', 'ar' => 'إسكي شهر'],
            ],

            [
                'id' => 47,
                'country_id' => 2,
                'name' => ['en' => 'Gaziantep', 'ar' => 'غازي عنتاب'],
            ],

            [
                'id' => 48,
                'country_id' => 2,
                'name' => ['en' => 'Giresun', 'ar' => 'غيرسون'],
            ],

            [
                'id' => 49,
                'country_id' => 2,
                'name' => ['en' => 'Gumushane', 'ar' => 'غوموشخانه'],
            ],

            [
                'id' => 50,
                'country_id' => 2,
                'name' => ['en' => 'Hakkari', 'ar' => 'حكاري'],
            ],

            [
                'id' => 51,
                'country_id' => 2,
                'name' => ['en' => 'Hatay', 'ar' => 'حطاي'],
            ],

            [
                'id' => 52,
                'country_id' => 2,
                'name' => ['en' => 'Igdir', 'ar' => 'إغدير'],
            ],

            [
                'id' => 53,
                'country_id' => 2,
                'name' => ['en' => 'Isparta', 'ar' => 'إسبرطة'],
            ],

            [
                'id' => 54,
                'country_id' => 2,
                'name' => ['en' => 'Istanbul', 'ar' => 'إسطنبول'],
            ],

            [
                'id' => 55,
                'country_id' => 2,
                'name' => ['en' => 'Izmir', 'ar' => 'إزمير'],
            ],

            [
                'id' => 56,
                'country_id' => 2,
                'name' => ['en' => 'Kahramanmaras', 'ar' => 'قهرمان مرعش'],
            ],

            [
                'id' => 57,
                'country_id' => 2,
                'name' => ['en' => 'Karabuk', 'ar' => 'قرة بوك'],
            ],

            [
                'id' => 58,
                'country_id' => 2,
                'name' => ['en' => 'Karaman', 'ar' => 'قرمان'],
            ],

            [
                'id' => 59,
                'country_id' => 2,
                'name' => ['en' => 'Kars', 'ar' => 'قارص'],
            ],

            [
                'id' => 60,
                'country_id' => 2,
                'name' => ['en' => 'Kastamonu', 'ar' => 'قسطموني'],
            ],

            [
                'id' => 61,
                'country_id' => 2,
                'name' => ['en' => 'Kayseri', 'ar' => 'قيصري'],
            ],

            [
                'id' => 62,
                'country_id' => 2,
                'name' => ['en' => 'Kilis', 'ar' => 'كلس'],
            ],

            [
                'id' => 63,
                'country_id' => 2,
                'name' => ['en' => 'Kirikkale', 'ar' => 'كرك كل'],
            ],

            [
                'id' => 64,
                'country_id' => 2,
                'name' => ['en' => 'Kirklareli', 'ar' => 'كركلار إيلي'],
            ],

            [
                'id' => 65,
                'country_id' => 2,
                'name' => ['en' => 'Kirsehir', 'ar' => 'قير شهر'],
            ],

            [
                'id' => 66,
                'country_id' => 2,
                'name' => ['en' => 'Kocaeli', 'ar' => 'قوجه إيلي'],
            ],

            [
                'id' => 67,
                'country_id' => 2,
                'name' => ['en' => 'Konya', 'ar' => 'قونية'],
            ],

            [
                'id' => 68,
                'country_id' => 2,
                'name' => ['en' => 'Kutahya', 'ar' => 'كوتاهية'],
            ],

            [
                'id' => 69,
                'country_id' => 2,
                'name' => ['en' => 'Malatya', 'ar' => 'ملاطية'],
            ],

            [
                'id' => 70,
                'country_id' => 2,
                'name' => ['en' => 'Manisa', 'ar' => 'مانيسا'],
            ],

            [
                'id' => 71,
                'country_id' => 2,
                'name' => ['en' => 'Mardin', 'ar' => 'ماردين'],
            ],

            [
                'id' => 72,
                'country_id' => 2,
                'name' => ['en' => 'Mersin', 'ar' => 'مرسين'],
            ],

            [
                'id' => 73,
                'country_id' => 2,
                'name' => ['en' => 'Mugla', 'ar' => 'موغلا'],
            ],

            [
                'id' => 74,
                'country_id' => 2,
                'name' => ['en' => 'Mus', 'ar' => 'موش'],
            ],

            [
                'id' => 75,
                'country_id' => 2,
                'name' => ['en' => 'Nevsehir', 'ar' => 'نف شهر'],
            ],

            [
                'id' => 76,
                'country_id' => 2,
                'name' => ['en' => 'Nigde', 'ar' => 'نيغدة'],
            ],

            [
                'id' => 77,
                'country_id' => 2,
                'name' => ['en' => 'Ordu', 'ar' => 'أوردو'],
            ],

            [
                'id' => 78,
                'country_id' => 2,
                'name' => ['en' => 'Osmaniye', 'ar' => 'عثمانية'],
            ],

            [
                'id' => 79,
                'country_id' => 2,
                'name' => ['en' => 'Rize', 'ar' => 'ريزه'],
            ],

            [
                'id' => 80,
                'country_id' => 2,
                'name' => ['en' => 'Sakarya', 'ar' => 'سكاريا'],
            ],

            [
                'id' => 81,
                'country_id' => 2,
                'name' => ['en' => 'Samsun', 'ar' => 'سامسون'],
            ],

            [
                'id' => 82,
                'country_id' => 2,
                'name' => ['en' => 'Sanliurfa', 'ar' => 'شانلي أورفة'],
            ],

            [
                'id' => 83,
                'country_id' => 2,
                'name' => ['en' => 'Siirt', 'ar' => 'سعرد'],
            ],

            [
                'id' => 84,
                'country_id' => 2,
                'name' => ['en' => 'Sinop', 'ar' => 'سينوب'],
            ],

            [
                'id' => 85,
                'country_id' => 2,
                'name' => ['en' => 'Sirnak', 'ar' => 'شرناق'],
            ],

            [
                'id' => 86,
                'country_id' => 2,
                'name' => ['en' => 'Sivas', 'ar' => 'سيوس'],
            ],

            [
                'id' => 87,
                'country_id' => 2,
                'name' => ['en' => 'Tekirdag', 'ar' => 'تكيرداغ'],
            ],

            [
                'id' => 88,
                'country_id' => 2,
                'name' => ['en' => 'Tokat', 'ar' => 'توقات'],
            ],

            [
                'id' => 89,
                'country_id' => 2,
                'name' => ['en' => 'Trabzon', 'ar' => 'طرابزون'],
            ],

            [
                'id' => 90,
                'country_id' => 2,
                'name' => ['en' => 'Tunceli', 'ar' => 'تونجيلي'],
            ],

            [
                'id' => 91,
                'country_id' => 2,
                'name' => ['en' => 'Usak', 'ar' => 'أوشاك'],
            ],

            [
                'id' => 92,
                'country_id' => 2,
                'name' => ['en' => 'Van', 'ar' => 'وان'],
            ],

            [
                'id' => 93,
                'country_id' => 2,
                'name' => ['en' => 'Yalova', 'ar' => 'يالوفا'],
            ],

            [
                'id' => 94,
                'country_id' => 2,
                'name' => ['en' => 'Yozgat', 'ar' => 'يوزغات'],
            ],

            [
                'id' => 95,
                'country_id' => 2,
                'name' => ['en' => 'Zonguldak', 'ar' => 'زونغولداك'],
            ],
        ];


        foreach ($governorates as $governorate) {
            governorate::create($governorate);

        }
    }
}
