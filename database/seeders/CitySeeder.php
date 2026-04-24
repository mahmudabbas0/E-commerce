<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     //   DB::table('cities')->truncate();

        $cities = [

            [
                'governorate_id' => 1,
                'name' => ['ar' => 'دمشق', 'en' => 'Damascus'],
            ],

            [
                'governorate_id' => 1,
                'name' => ['ar' => 'جوبر', 'en' => 'Jobar'],
            ],

            [
                'governorate_id' => 1,
                'name' => ['ar' => 'القابون', 'en' => 'Qaboun'],
            ],

            [
                'governorate_id' => 1,
                'name' => ['ar' => 'برزة', 'en' => 'Barzeh'],
            ],

            [
                'governorate_id' => 1,
                'name' => ['ar' => 'المالكي', 'en' => 'Malki'],
            ],

            [
                'governorate_id' => 1,
                'name' => ['ar' => 'المزة', 'en' => 'Mazzeh'],
            ],

            [
                'governorate_id' => 1,
                'name' => ['ar' => 'الصالحية', 'en' => 'Salhieh'],
            ],

            [
                'governorate_id' => 1,
                'name' => ['ar' => 'الحمراء', 'en' => 'Hamra'],
            ],

            [
                'governorate_id' => 1,
                'name' => ['ar' => 'البرامكة', 'en' => 'Baramkeh'],
            ],

            [
                'governorate_id' => 1,
                'name' => ['ar' => 'مساكن برزة', 'en' => 'Masaken Barzeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'دوما', 'en' => 'Douma'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'حرستا', 'en' => 'Harasta'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'قطنا', 'en' => 'Qatana'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'التل', 'en' => 'Al-Tall'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'جرمانا', 'en' => 'Jaramana'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'داريا', 'en' => 'Darayya'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'معضمية الشام', 'en' => 'Moadamiyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'الزبداني', 'en' => 'Zabadani'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'مضايا', 'en' => 'Madaya'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'سرغايا', 'en' => 'Sergaya'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'قدسيا', 'en' => 'Qudsaya'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'الحامة', 'en' => 'Al-Hameh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'الديماس', 'en' => 'Al-Dimas'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'جديدة عرطوز', 'en' => 'Jdeidat Artouz'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'صحنايا', 'en' => 'Sahnaya'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'ببيلا', 'en' => 'Babbila'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'يلدا', 'en' => 'Yalda'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'بيت سحم', 'en' => 'Beit Sahem'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'الهجيرة', 'en' => 'Hajeera'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'عين ترما', 'en' => 'Ain Tarma'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'عربين', 'en' => 'Arbin'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'حمورية', 'en' => 'Hamouriyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'سقبا', 'en' => 'Saqba'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'كفر بطنا', 'en' => 'Kafr Batna'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'جسرين', 'en' => 'Jisreen'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'مسرابا', 'en' => 'Misraba'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'النشابية', 'en' => 'Al-Nashabiyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'الغزلانية', 'en' => 'Al-Ghizlaniyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'دير العصافير', 'en' => 'Deir Al-Asafir'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'المليحة', 'en' => 'Al-Malihah'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'البحرية', 'en' => 'Al-Bahariyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'المحمدية', 'en' => 'Al-Muhammadiyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'الجربا', 'en' => 'Al-Jarba'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'العباسية', 'en' => 'Al-Abbasieh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'القيسا', 'en' => 'Al-Qisa'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'المقدمية', 'en' => 'Al-Maqaddamiyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'الحسينية', 'en' => 'Al-Husseiniyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'المليحة', 'en' => 'Al-Mleiha'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'النشابية', 'en' => 'Al-Nashabiyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'الغزلانية', 'en' => 'Al-Ghizlaniyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'دير العصافير', 'en' => 'Deir Al-Asafir'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'المليحة', 'en' => 'Al-Malihah'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'البحرية', 'en' => 'Al-Bahariyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'المحمدية', 'en' => 'Al-Muhammadiyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'الجربا', 'en' => 'Al-Jarba'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'العباسية', 'en' => 'Al-Abbasieh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'القيسا', 'en' => 'Al-Qisa'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'المقدمية', 'en' => 'Al-Maqaddamiyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'الحسينية', 'en' => 'Al-Husseiniyeh'],
            ],

            [
                'governorate_id' => 2,
                'name' => ['ar' => 'المليحة', 'en' => 'Al-Mleiha'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'حلب', 'en' => 'Aleppo'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الباب', 'en' => 'Al-Bab'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'عفرين', 'en' => 'Afrin'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'منبج', 'en' => 'Manbij'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'عين العرب', 'en' => 'Ayn al-Arab'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'جرابلس', 'en' => 'Jarabulus'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'اعزاز', 'en' => 'Azaz'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'السفيرة', 'en' => 'Al-Safirah'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'تادف', 'en' => 'Tadef'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'دير حافر', 'en' => 'Dayr Hafir'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الأتارب', 'en' => 'Al-Atareb'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'عندان', 'en' => 'Anadan'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'حريتان', 'en' => 'Hreitan'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'كفر حمرة', 'en' => 'Kafr Hamrah'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'حيان', 'en' => 'Hayyan'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'حريتان', 'en' => 'Haritan'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'تل رفعت', 'en' => 'Tell Rifaat'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'مارع', 'en' => 'Mare'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'صوران', 'en' => 'Soran'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الراعي', 'en' => 'Al-Rai'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'أخترين', 'en' => 'Akhtarin'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'دابق', 'en' => 'Dabiq'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'القاسمية', 'en' => 'Al-Kasimiyah'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الأبزيمو', 'en' => 'Al-Abzimo'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'كفر ناها', 'en' => 'Kafr Naha'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'أورم الكبرى', 'en' => 'Urum al-Kubrah'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'أورم الصغرى', 'en' => 'Urum al-Sughrah'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'حدادين', 'en' => 'Haddadin'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'نبل', 'en' => 'Nubl'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الزهراء', 'en' => 'Al-Zahraa'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'بيانون', 'en' => 'Bayanoun'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'حيان', 'en' => 'Hayyan'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'كفر حمرة', 'en' => 'Kafr Hamrah'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الليرمون', 'en' => 'Al-Layramoun'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'صلاح الدين', 'en' => 'Salah al-Din'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الشيخ مقصود', 'en' => 'Sheikh Maqsoud'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'السكري', 'en' => 'Al-Sukkari'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الفردوس', 'en' => 'Al-Fardous'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الصالحين', 'en' => 'Al-Saliheen'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'بستان القصر', 'en' => 'Bustan al-Qasr'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الأنصاري', 'en' => 'Al-Ansari'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'المشهد', 'en' => 'Al-Mashhad'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'السابل', 'en' => 'Al-Sabil'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'باب النيرب', 'en' => 'Bab al-Nairab'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'المرجة', 'en' => 'Al-Marjeh'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الجديدة', 'en' => 'Al-Jadideh'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الحمدانية', 'en' => 'Al-Hamdaniyeh'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'العزيزية', 'en' => 'Al-Aziziyeh'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'حلب الجديدة', 'en' => 'New Aleppo'],
            ],

            [
                'governorate_id' => 3,
                'name' => ['ar' => 'الشهباء', 'en' => 'Al-Shahba'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'حمص', 'en' => 'Homs'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'الرستن', 'en' => 'Al-Rastan'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'تلبيسة', 'en' => 'Talbiseh'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'القصير', 'en' => 'Al-Qusayr'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'تلكلخ', 'en' => 'Talkalakh'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'المخرم', 'en' => 'Al-Mukharram'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'القريتين', 'en' => 'Al-Qaryatayn'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'تدمر', 'en' => 'Palmyra'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'الحواش', 'en' => 'Al-Hawash'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'فيروزة', 'en' => 'Fairouzeh'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'صدد', 'en' => 'Sadad'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'مhin', 'en' => 'Mahin'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'الحولة', 'en' => 'Al-Holeh'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'الغنطو', 'en' => 'Al-Ghanto'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'تلدو', 'en' => 'Taldou'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'كفرلاها', 'en' => 'Kafr Laha'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'ترمسة', 'en' => 'Tremseh'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'الزعفرانة', 'en' => 'Al-Zaafaraneh'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'دار الكبيرة', 'en' => 'Al-Dar al-Kabirah'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'الغزلانية', 'en' => 'Al-Ghuzlaniyah'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'المشرفة', 'en' => 'Al-Mashrafah'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'الفرقلس', 'en' => 'Al-Furqlus'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'السخنة', 'en' => 'Al-Sukhnah'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'شين', 'en' => 'Shin'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'حسياء', 'en' => 'Hisyah'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'القريتين', 'en' => 'Al-Qaryatayn'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'مهين', 'en' => 'Mahin'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'الحواش', 'en' => 'Al-Hawash'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'صدد', 'en' => 'Sadad'],
            ],

            [
                'governorate_id' => 4,
                'name' => ['ar' => 'الحولة', 'en' => 'Al-Holeh'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'حماة', 'en' => 'Hama'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'مصياف', 'en' => 'Masyaf'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'محردة', 'en' => 'Mahardah'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'سلمية', 'en' => 'Salamiyah'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'صوران', 'en' => 'Suran'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'طيبة الإمام', 'en' => 'Taybat al-Imam'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'حلفايا', 'en' => 'Halfaya'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'كفرزيتا', 'en' => 'Kafr Zita'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'اللطامنة', 'en' => 'Lataminah'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'مورك', 'en' => 'Morek'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'كفرنبودة', 'en' => 'Kafr Nabudah'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'قلعة المضيق', 'en' => 'Qalaat al-Madiq'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'السقيلبية', 'en' => 'Al-Suqaylabiyah'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'محردة', 'en' => 'Mhardeh'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'شيزر', 'en' => 'Shaizar'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'حربنفسه', 'en' => 'Hirbnafsah'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'جب رملة', 'en' => 'Jubb Ramlah'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'عقرب', 'en' => 'Aqrab'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'حواش', 'en' => 'Hawash'],
            ],

            [
                'governorate_id' => 5,
                'name' => ['ar' => 'كفر بهم', 'en' => 'Kafr Buhum'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'اللاذقية', 'en' => 'Latakia'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'جبلة', 'en' => 'Jableh'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'بانياس', 'en' => 'Baniyas'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'القرداحة', 'en' => 'Qardaha'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'طرطوس', 'en' => 'Tartous'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'الحفة', 'en' => 'Al-Haffah'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'صلنفة', 'en' => 'Slinfah'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'كنسبا', 'en' => 'Kinsabba'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'ربيعة', 'en' => 'Rabia'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'الدالية', 'en' => 'Al-Daliyah'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'عين الشرقية', 'en' => 'Ayn al-Sharqiyah'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'الشامية', 'en' => 'Al-Shamiyah'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'بكسا', 'en' => 'Baksa'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'القطيلبية', 'en' => 'Al-Qutailibiyah'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'البحلولية', 'en' => 'Al-Bahluliyah'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'دوير بعبده', 'en' => 'Dweir Baabda'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'الشير', 'en' => 'Al-Shir'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'عين البيضا', 'en' => 'Ayn al-Bayda'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'البصة', 'en' => 'Al-Bassah'],
            ],

            [
                'governorate_id' => 6,
                'name' => ['ar' => 'برج إسلام', 'en' => 'Burj Islam'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'طرطوس', 'en' => 'Tartous'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'بانياس', 'en' => 'Baniyas'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'صافيتا', 'en' => 'Safita'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'الدريكيش', 'en' => 'Dreikish'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'الشيخ بدر', 'en' => 'Sheikh Badr'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'القدموس', 'en' => 'Al-Qadmus'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'الحميدية', 'en' => 'Al-Hamidiyah'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'أرواد', 'en' => 'Arwad'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'السودا', 'en' => 'Al-Sawda'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'الكريمة', 'en' => 'Al-Karimah'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'الديماس', 'en' => 'Al-Dimas'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'القامشية', 'en' => 'Al-Qamsiyah'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'الثورة', 'en' => 'Al-Thawrah'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'البعث', 'en' => 'Al-Baath'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'المقال', 'en' => 'Al-Maqal'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'المطراس', 'en' => 'Al-Mitras'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'الروضة', 'en' => 'Al-Rawda'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'المشقيتا', 'en' => 'Al-Mashqita'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'القطيلبية', 'en' => 'Al-Qutailibiyah'],
            ],

            [
                'governorate_id' => 7,
                'name' => ['ar' => 'البحلولية', 'en' => 'Al-Bahluliyah'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'دير الزور', 'en' => 'Deir ez-Zor'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'الميادين', 'en' => 'Al-Mayadin'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'البوكمال', 'en' => 'Al-Bukamal'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'العشارة', 'en' => 'Al-Asharah'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'محسان', 'en' => 'Muhassan'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'القورية', 'en' => 'Al-Quriyah'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'التبني', 'en' => 'Al-Tibni'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'الكسرة', 'en' => 'Al-Kasrah'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'هجين', 'en' => 'Hajin'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'السوسة', 'en' => 'Al-Susah'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'الباغوز', 'en' => 'Al-Baghuz'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'غرانيج', 'en' => 'Gharanij'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'أبو حمام', 'en' => 'Abu Hamam'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'الخشام', 'en' => 'Khasham'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'الصالحية', 'en' => 'Al-Salhiyah'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'الجلاء', 'en' => 'Al-Jalaa'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'الطيانة', 'en' => 'Al-Tayanah'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'الشعفة', 'en' => 'Al-Shaafah'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'السبحة', 'en' => 'Al-Sabha'],
            ],

            [
                'governorate_id' => 8,
                'name' => ['ar' => 'الدحلة', 'en' => 'Al-Dahla'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'الحسكة', 'en' => 'Al-Hasakah'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'القامشلي', 'en' => 'Qamishli'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'رأس العين', 'en' => 'Ras al-Ayn'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'المالكية', 'en' => 'Al-Malikiyah'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'الشدادي', 'en' => 'Al-Shaddadi'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'الهول', 'en' => 'Al-Hawl'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'العريشة', 'en' => 'Al-Arishah'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'التوينة', 'en' => 'Al-Tweinah'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'تل براك', 'en' => 'Tell Brak'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'الدرباسية', 'en' => 'Al-Darbasiyah'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'عامودا', 'en' => 'Amuda'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'القحطانية', 'en' => 'Al-Qahtaniyah'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'الجوايدة', 'en' => 'Al-Jawadiyah'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'اليعربية', 'en' => 'Al-Yaarubiyah'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'السبعة وأربعين', 'en' => 'Al-Sabaa wa Arbain'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'تل حميس', 'en' => 'Tell Hamis'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'أبو راسين', 'en' => 'Abu Rasin'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'المناجير', 'en' => 'Al-Manajir'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'الخريطة', 'en' => 'Al-Kharitah'],
            ],

            [
                'governorate_id' => 9,
                'name' => ['ar' => 'الصالحية', 'en' => 'Al-Salihiyah'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'الرقة', 'en' => 'Raqqa'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'الطبقة', 'en' => 'Al-Tabqah'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'تل أبيض', 'en' => 'Tell Abyad'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'الثورة', 'en' => 'Al-Thawrah'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'المنصورة', 'en' => 'Al-Mansurah'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'عين عيسى', 'en' => 'Ayn Issa'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'سلوك', 'en' => 'Suluk'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'الجرنية', 'en' => 'Al-Jarniyah'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'الكرامة', 'en' => 'Al-Karamah'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'الصفصافة', 'en' => 'Al-Safsafah'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'الهيشة', 'en' => 'Al-Hishah'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'الحمرات', 'en' => 'Al-Hamrat'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'المشلب', 'en' => 'Al-Mashlab'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'الرمیلان', 'en' => 'Al-Rumaylan'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'الكلتة', 'en' => 'Al-Kaltah'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'السمرا', 'en' => 'Al-Samra'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'المغير', 'en' => 'Al-Mughayyir'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'الدلعة', 'en' => 'Al-Dallah'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'السويدية', 'en' => 'Al-Sweidiyeh'],
            ],

            [
                'governorate_id' => 10,
                'name' => ['ar' => 'الحكومية', 'en' => 'Al-Hukumiyah'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'إدلب', 'en' => 'Idlib'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'أريحا', 'en' => 'Ariha'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'جسر الشغور', 'en' => 'Jisr al-Shughur'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'معرة النعمان', 'en' => 'Maarrat al-Numan'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'سراقب', 'en' => 'Saraqib'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'بنش', 'en' => 'Binnish'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'تفتناز', 'en' => 'Taftanaz'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'سرمدا', 'en' => 'Sarmada'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'دانا', 'en' => 'Dana'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'أطمة', 'en' => 'Atmeh'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'حارم', 'en' => 'Harem'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'سلقين', 'en' => 'Salqin'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'الدانا', 'en' => 'Al - Dana'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'كفر تخاريم', 'en' => 'Kafr Takharim'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'أرمناز', 'en' => 'Armanaz'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'دركوش', 'en' => 'Darkush'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'الجنيدية', 'en' => 'Al - Janudiyah'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'قورقانيا', 'en' => 'Qurqania'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'إحسم', 'en' => 'Ehsem'],
            ],

            [
                'governorate_id' => 11,
                'name' => ['ar' => 'البراء', 'en' => 'Al - Barah'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'درعا', 'en' => 'Daraa'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'إزرع', 'en' => 'Izra'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'الصنمين', 'en' => 'Al - Sanamayn'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'نوى', 'en' => 'Nawa'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'طفس', 'en' => 'Tafas'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'جاسم', 'en' => 'Jasim'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'إنخل', 'en' => 'Inkhil'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'الحراك', 'en' => 'Al - Harak'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'المسيفرة', 'en' => 'Al - Musayfirah'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'الشجرة', 'en' => 'Al - Shajarah'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'تسيل', 'en' => 'Tasil'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'اليادودة', 'en' => 'Al - Yadudah'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'داعل', 'en' => 'Dael'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'مزيريب', 'en' => 'Muzayrib'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'الشيخ سعد', 'en' => 'Al - Shaykh Saad'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'الغارية', 'en' => 'Al - Ghariyah'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'الكرك', 'en' => 'Al - Karak'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'الصهوة', 'en' => 'Al - Sahwah'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'الجيزة', 'en' => 'Al - Jizah'],
            ],

            [
                'governorate_id' => 12,
                'name' => ['ar' => 'المسمية', 'en' => 'Al - Masmiyah'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'السويداء', 'en' => 'as-Suwayda'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'صلخد', 'en' => 'Salkhad'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'شهبا', 'en' => 'Shahba'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'القريا', 'en' => 'Al - Qurayya'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'ذيبان', 'en' => 'Thiab'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'مجدل شمس', 'en' => 'Majdal Shams'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'مسعدة', 'en' => 'Masadah'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'عين التينة', 'en' => 'Ain al - Tineh'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'عرنة', 'en' => 'Arneh'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'المشنف', 'en' => 'Al - Mushannaf'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'الغارية', 'en' => 'Al - Ghariyah'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'غدير البستان', 'en' => 'Ghadeer al - Bustan'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'ريمة اللحف', 'en' => 'Rimet al - Luhf'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'الصورة الصغيرة', 'en' => 'Al - Surah al - Saghirah'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'الكفر', 'en' => 'Al - Kafr'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'المجدل', 'en' => 'Al - Majdal'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'الرحى', 'en' => 'Al - Ruha'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'الدور', 'en' => 'Al - Dour'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'البستان', 'en' => 'Al - Bustan'],
            ],

            [
                'governorate_id' => 13,
                'name' => ['ar' => 'الدوير', 'en' => 'Al - Duwair'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'القنيطرة', 'en' => 'Quneitra'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'خان ارنبة', 'en' => 'Khan Arnabah'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'مدينة البعث', 'en' => 'Al - Baath City'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'مدينة البعث', 'en' => 'Madinat al - Baath'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'جباتا الخشب', 'en' => 'Jubata al - Khashab'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'مشعرا', 'en' => 'Mashara'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'الحميدية', 'en' => 'Al - Hamidiyah'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'الرفيد', 'en' => 'Al - Rafid'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'المعلق', 'en' => 'Al - Muallaqa'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'كودنا', 'en' => 'Kudna'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'السمدانية الغربية', 'en' => 'Al - Samadaniyah al - Gharbiyah'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'السمدانية الشرقية', 'en' => 'Al - Samadaniyah al - Sharqiyah'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'الأجرف', 'en' => 'Al - Ajraf'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'القحطانية', 'en' => 'Al - Qahtaniyah'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'الحرية', 'en' => 'Al - Huriyah'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'المنصورة', 'en' => 'Al - Mansurah'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'الشقحب', 'en' => 'Al - Shaqhab'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'الزبيدة', 'en' => 'Al - Zubaydah'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'المهجر', 'en' => 'Al - Mahjar'],
            ],

            [
                'governorate_id' => 14,
                'name' => ['ar' => 'الحميدية', 'en' => 'Al - Hamidiyah'],
            ],

            [
                'governorate_id' => 15,
                'name' => ['ar' => 'أضنة', 'en' => 'Adana'],
            ],

            [
                'governorate_id' => 16,
                'name' => ['ar' => 'أديامان', 'en' => 'Adiyaman'],
            ],

            [
                'governorate_id' => 17,
                'name' => ['ar' => 'أفيون قرة حصار', 'en' => 'Afyonkarahisar'],
            ],

            [
                'governorate_id' => 18,
                'name' => ['ar' => 'آغري', 'en' => 'Agri'],
            ],

            [
                'governorate_id' => 19,
                'name' => ['ar' => 'أكساراي', 'en' => 'Aksaray'],
            ],

            [
                'governorate_id' => 20,
                'name' => ['ar' => 'أماسيا', 'en' => 'Amasya'],
            ],

            [
                'governorate_id' => 21,
                'name' => ['ar' => 'أنقرة', 'en' => 'Ankara'],
            ],

            [
                'governorate_id' => 22,
                'name' => ['ar' => 'أنطاليا', 'en' => 'Antalya'],
            ],

            [
                'governorate_id' => 23,
                'name' => ['ar' => 'أرداهان', 'en' => 'Ardahan'],
            ],

            [
                'governorate_id' => 24,
                'name' => ['ar' => 'أرتفين', 'en' => 'Artvin'],
            ],

            [
                'governorate_id' => 25,
                'name' => ['ar' => 'أيدن', 'en' => 'Aydin'],
            ],

            [
                'governorate_id' => 26,
                'name' => ['ar' => 'باليكسير', 'en' => 'Balikesir'],
            ],

            [
                'governorate_id' => 27,
                'name' => ['ar' => 'بارتين', 'en' => 'Bartin'],
            ],

            [
                'governorate_id' => 28,
                'name' => ['ar' => 'باتمان', 'en' => 'Batman'],
            ],

            [
                'governorate_id' => 29,
                'name' => ['ar' => 'بايبورت', 'en' => 'Bayburt'],
            ],

            [
                'governorate_id' => 30,
                'name' => ['ar' => 'بيلجيك', 'en' => 'Bilecik'],
            ],

            [
                'governorate_id' => 31,
                'name' => ['ar' => 'بينغول', 'en' => 'Bingol'],
            ],

            [
                'governorate_id' => 32,
                'name' => ['ar' => 'بتليس', 'en' => 'Bitlis'],
            ],

            [
                'governorate_id' => 33,
                'name' => ['ar' => 'بولو', 'en' => 'Bolu'],
            ],

            [
                'governorate_id' => 34,
                'name' => ['ar' => 'بوردور', 'en' => 'Burdur'],
            ],

            [
                'governorate_id' => 35,
                'name' => ['ar' => 'بورصة', 'en' => 'Bursa'],
            ],

            [
                'governorate_id' => 36,
                'name' => ['ar' => 'جاناك قلعة', 'en' => 'Canakkale'],
            ],

            [
                'governorate_id' => 37,
                'name' => ['ar' => 'جانقيري', 'en' => 'Cankiri'],
            ],

            [
                'governorate_id' => 38,
                'name' => ['ar' => 'تشوروم', 'en' => 'Corum'],
            ],

            [
                'governorate_id' => 39,
                'name' => ['ar' => 'دنيزلي', 'en' => 'Denizli'],
            ],

            [
                'governorate_id' => 40,
                'name' => ['ar' => 'ديار بكر', 'en' => 'Diyarbakir'],
            ],

            [
                'governorate_id' => 41,
                'name' => ['ar' => 'دوزجة', 'en' => 'Duzce'],
            ],

            [
                'governorate_id' => 42,
                'name' => ['ar' => 'أدرنة', 'en' => 'Edirne'],
            ],

            [
                'governorate_id' => 43,
                'name' => ['ar' => 'إيلازيغ', 'en' => 'Elazig'],
            ],

            [
                'governorate_id' => 44,
                'name' => ['ar' => 'أرزنجان', 'en' => 'Erzincan'],
            ],

            [
                'governorate_id' => 45,
                'name' => ['ar' => 'أرضروم', 'en' => 'Erzurum'],
            ],

            [
                'governorate_id' => 46,
                'name' => ['ar' => 'إسكي شهر', 'en' => 'Eskisehir'],
            ],

            [
                'governorate_id' => 47,
                'name' => ['ar' => 'غازي عنتاب', 'en' => 'Gaziantep'],
            ],

            [
                'governorate_id' => 48,
                'name' => ['ar' => 'غيرسون', 'en' => 'Giresun'],
            ],

            [
                'governorate_id' => 49,
                'name' => ['ar' => 'غوموشخانه', 'en' => 'Gumushane'],
            ],

            [
                'governorate_id' => 50,
                'name' => ['ar' => 'حكاري', 'en' => 'Hakkari'],
            ],

            [
                'governorate_id' => 51,
                'name' => ['ar' => 'حطاي', 'en' => 'Hatay'],
            ],

            [
                'governorate_id' => 52,
                'name' => ['ar' => 'إغدير', 'en' => 'Igdir'],
            ],

            [
                'governorate_id' => 53,
                'name' => ['ar' => 'إسبرطة', 'en' => 'Isparta'],
            ],

            [
                'governorate_id' => 54,
                'name' => ['ar' => 'إسطنبول', 'en' => 'Istanbul'],
            ],

            [
                'governorate_id' => 55,
                'name' => ['ar' => 'إزمير', 'en' => 'Izmir'],
            ],

            [
                'governorate_id' => 56,
                'name' => ['ar' => 'قهرمان مرعش', 'en' => 'Kahramanmaras'],
            ],

            [
                'governorate_id' => 57,
                'name' => ['ar' => 'قرة بوك', 'en' => 'Karabuk'],
            ],

            [
                'governorate_id' => 58,
                'name' => ['ar' => 'قرمان', 'en' => 'Karaman'],
            ],

            [
                'governorate_id' => 59,
                'name' => ['ar' => 'قارص', 'en' => 'Kars'],
            ],

            [
                'governorate_id' => 60,
                'name' => ['ar' => 'قسطموني', 'en' => 'Kastamonu'],
            ],

            [
                'governorate_id' => 61,
                'name' => ['ar' => 'قيصري', 'en' => 'Kayseri'],
            ],

            [
                'governorate_id' => 62,
                'name' => ['ar' => 'كلس', 'en' => 'Kilis'],
            ],

            [
                'governorate_id' => 63,
                'name' => ['ar' => 'كرك كل', 'en' => 'Kirikkale'],
            ],

            [
                'governorate_id' => 64,
                'name' => ['ar' => 'كركلار إيلي', 'en' => 'Kirklareli'],
            ],

            [
                'governorate_id' => 65,
                'name' => ['ar' => 'قير شهر', 'en' => 'Kirsehir'],
            ],

            [
                'governorate_id' => 66,
                'name' => ['ar' => 'قوجه إيلي', 'en' => 'Kocaeli'],
            ],

            [
                'governorate_id' => 67,
                'name' => ['ar' => 'قونية', 'en' => 'Konya'],
            ],

            [
                'governorate_id' => 68,
                'name' => ['ar' => 'كوتاهية', 'en' => 'Kutahya'],
            ],

            [
                'governorate_id' => 69,
                'name' => ['ar' => 'ملاطية', 'en' => 'Malatya'],
            ],

            [
                'governorate_id' => 70,
                'name' => ['ar' => 'مانيسا', 'en' => 'Manisa'],
            ],

            [
                'governorate_id' => 71,
                'name' => ['ar' => 'ماردين', 'en' => 'Mardin'],
            ],

            [
                'governorate_id' => 72,
                'name' => ['ar' => 'مرسين', 'en' => 'Mersin'],
            ],

            [
                'governorate_id' => 73,
                'name' => ['ar' => 'موغلا', 'en' => 'Mugla'],
            ],

            [
                'governorate_id' => 74,
                'name' => ['ar' => 'موش', 'en' => 'Mus'],
            ],

            [
                'governorate_id' => 75,
                'name' => ['ar' => 'نف شهر', 'en' => 'Nevsehir'],
            ],

            [
                'governorate_id' => 76,
                'name' => ['ar' => 'نيغدة', 'en' => 'Nigde'],
            ],

            [
                'governorate_id' => 77,
                'name' => ['ar' => 'أوردو', 'en' => 'Ordu'],
            ],

            [
                'governorate_id' => 78,
                'name' => ['ar' => 'عثمانية', 'en' => 'Osmaniye'],
            ],

            [
                'governorate_id' => 79,
                'name' => ['ar' => 'ريزه', 'en' => 'Rize'],
            ],

            [
                'governorate_id' => 80,
                'name' => ['ar' => 'سكاريا', 'en' => 'Sakarya'],
            ],

            [
                'governorate_id' => 81,
                'name' => ['ar' => 'سامسون', 'en' => 'Samsun'],
            ],

            [
                'governorate_id' => 82,
                'name' => ['ar' => 'شانلي أورفة', 'en' => 'Sanliurfa'],
            ],

            [
                'governorate_id' => 83,
                'name' => ['ar' => 'سعرد', 'en' => 'Siirt'],
            ],

            [
                'governorate_id' => 84,
                'name' => ['ar' => 'سينوب', 'en' => 'Sinop'],
            ],

            [
                'governorate_id' => 85,
                'name' => ['ar' => 'شرناق', 'en' => 'Sirnak'],
            ],

            [
                'governorate_id' => 86,
                'name' => ['ar' => 'سيوس', 'en' => 'Sivas'],
            ],

            [
                'governorate_id' => 87,
                'name' => ['ar' => 'تكيرداغ', 'en' => 'Tekirdag'],
            ],

            [
                'governorate_id' => 88,
                'name' => ['ar' => 'توقات', 'en' => 'Tokat'],
            ],

            [
                'governorate_id' => 89,
                'name' => ['ar' => 'طرابزون', 'en' => 'Trabzon'],
            ],

            [
                'governorate_id' => 90,
                'name' => ['ar' => 'تونجيلي', 'en' => 'Tunceli'],
            ],

            [
                'governorate_id' => 91,
                'name' => ['ar' => 'أوشاك', 'en' => 'Usak'],
            ],

            [
                'governorate_id' => 92,
                'name' => ['ar' => 'وان', 'en' => 'Van'],
            ],

            [
                'governorate_id' => 93,
                'name' => ['ar' => 'يالوفا', 'en' => 'Yalova'],
            ],

            [
                'governorate_id' => 94,
                'name' => ['ar' => 'يوزغات', 'en' => 'Yozgat'],
            ],

            [
                'governorate_id' => 95,
                'name' => ['ar' => 'زونغولداك', 'en' => 'Zonguldak'],
            ],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }

    }
}
