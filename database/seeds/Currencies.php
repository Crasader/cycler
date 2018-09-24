<?php

use Illuminate\Database\Seeder;

class Currencies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert($this->data);
    }

    protected $data = array(
    	 [
			
			"code"=> "USD",
			"name"=> "US Dollar",
			"decimal_points"=> 2,
			"symbol"=> "$",
			"is_active"=> true,
			"is_custom_flag"=> false
		], 
		
		[
			
			"code"=> "EUR",
			"name"=> "Euro",
			"decimal_points"=> 2,
			"symbol"=> "\u20ac",
			"is_active"=> true,
			"is_custom_flag"=> false
		],

		[
			
			"code"=> "RUB",
			"name"=> "Russian Ruble",
			"decimal_points"=> 2,
			"symbol"=> "RUB",
			"is_active"=> true,
			"is_custom_flag"=> false
		],

		[
			
			"code"=> "ILS",
			"name"=> "New Israeli Shekel",
			"decimal_points"=> 2,
			"symbol"=> "\u20aa",
			"is_active"=> true,
			"is_custom_flag"=> false
		],
		
  //   	[
		// 	"code"=> "AFN",
		// 	"name"=> "Afghanistan Afghani",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "AFN",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ALL",
		// 	"name"=> "Albanian Lek",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ALL",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "DZD",
		// 	"name"=> "Algerian Dinar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "DZD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AOA",
		// 	"name"=> "Angolan Kwanza",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "AOA",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ARS",
		// 	"name"=> "Argentine Peso",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ARS",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AMD",
		// 	"name"=> "Armenian Dram",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "AMD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AWG",
		// 	"name"=> "Aruban Guilder",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "AWG",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AUD",
		// 	"name"=> "Australian Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "A$",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AZN",
		// 	"name"=> "Azerbaijan Manat",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "AZN",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AZM",
		// 	"name"=> "Azerbaijan Old Manat",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BSD",
		// 	"name"=> "Bahamian Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BSD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BHD",
		// 	"name"=> "Bahraini Dinar",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "BHD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BDT",
		// 	"name"=> "Bangladesh Taka",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BDT",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BBD",
		// 	"name"=> "Barbados Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BBD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BYR",
		// 	"name"=> "Belarussian Ruble",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "BYR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BZD",
		// 	"name"=> "Belize Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BZD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BMD",
		// 	"name"=> "Bermudian Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BMD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BTN",
		// 	"name"=> "Bhutan Ngultrum",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BTN",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XBT",
		// 	"name"=> "Bitcoin",
		// 	"decimal_points"=> 8,
		// 	"symbol"=> "\u0e3f",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BOB",
		// 	"name"=> "Bolivian Boliviano",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BOB",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BAM",
		// 	"name"=> "Bosnia and Herzegovina Convertible Marks",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BAM",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BWP",
		// 	"name"=> "Botswana Pula",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BWP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BRL",
		// 	"name"=> "Brazilian Real",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "R$",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BND",
		// 	"name"=> "Brunei Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BND",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BGN",
		// 	"name"=> "Bulgarian Lev",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BGN",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BIF",
		// 	"name"=> "Burundi Franc",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "BIF",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KHR",
		// 	"name"=> "Cambodia Riel",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "KHR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CAD",
		// 	"name"=> "Canadian Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CA$",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CVE",
		// 	"name"=> "Cape Verde Escudo",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CVE",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KYD",
		// 	"name"=> "Cayman Islands Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "KYD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XOF",
		// 	"name"=> "CFA Franc BCEAO",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "CFA",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XAF",
		// 	"name"=> "CFA Franc BEAC",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "FCFA",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XPF",
		// 	"name"=> "CFP Franc",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "CFPF",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CLP",
		// 	"name"=> "Chilean Peso",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "CLP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CLF",
		// 	"name"=> "Chilean Unidad de Fomento",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CLF",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CNY",
		// 	"name"=> "Chinese Yuan Renminbi",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CN\u00a5",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "COP",
		// 	"name"=> "Colombian Peso",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "COP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KMF",
		// 	"name"=> "Comorian Franc",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "KMF",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CRC",
		// 	"name"=> "Costa Rican Colon",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20a1",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "HRK",
		// 	"name"=> "Croatian Kuna",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "HRK",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CUP",
		// 	"name"=> "Cuban Peso",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CUP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CYP",
		// 	"name"=> "Cyprus Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CZK",
		// 	"name"=> "Czech Koruna",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CZK",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "DKK",
		// 	"name"=> "Danish Krone",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "DKK",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "DJF",
		// 	"name"=> "Djibouti Franc",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "DJF",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "DOP",
		// 	"name"=> "Dominican Peso",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "DOP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XCD",
		// 	"name"=> "East Caribbean Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "EC$",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "EGP",
		// 	"name"=> "Egyptian Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "EGP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SVC",
		// 	"name"=> "El Salvador Colon",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20a1",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ERN",
		// 	"name"=> "Eritrea Nafka",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ERN",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "EEK",
		// 	"name"=> "Estonian Kroon",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ETB",
		// 	"name"=> "Ethiopian Birr",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ETB",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "FKP",
		// 	"name"=> "Falkland Islands Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "FKP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "FJD",
		// 	"name"=> "Fiji Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "FJD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CDF",
		// 	"name"=> "Franc Congolais",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CDF",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GMD",
		// 	"name"=> "Gambian Dalasi",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "GMD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GEL",
		// 	"name"=> "Georgian Lari",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "GEL",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GHC",
		// 	"name"=> "Ghana Cedi",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GHS",
		// 	"name"=> "Ghanaian Cedi",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "GHS",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GIP",
		// 	"name"=> "Gibraltar Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "GIP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XAU",
		// 	"name"=> "Gold",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "XAU",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GTQ",
		// 	"name"=> "Guatemala Quetzal",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "GTQ",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GNF",
		// 	"name"=> "Guinean Franc",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "GNF",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GYD",
		// 	"name"=> "Guyana Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "GYD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "HTG",
		// 	"name"=> "Haiti Gourde",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "HTG",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "HNL",
		// 	"name"=> "Honduras Lempira",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "HNL",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "HKD",
		// 	"name"=> "Hong Kong Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "HK$",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "HUF",
		// 	"name"=> "Hungarian Forint",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "HUF",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ISK",
		// 	"name"=> "Iceland Krona",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "ISK",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "INR",
		// 	"name"=> "Indian Rupee",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20a8",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "IDR",
		// 	"name"=> "Indonesian Rupiah",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "IDR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "IRR",
		// 	"name"=> "Iranian Rial",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "IRR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "IQD",
		// 	"name"=> "Iraqi Dinar",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "IQD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "JMD",
		// 	"name"=> "Jamaican Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "JMD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "JPY",
		// 	"name"=> "Japanese Yen",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "\u00a5",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "JOD",
		// 	"name"=> "Jordanian Dinar",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "JOD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KZT",
		// 	"name"=> "Kazakhstan Tenge",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "KZT",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KES",
		// 	"name"=> "Kenyan Shilling",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "KES",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KRW",
		// 	"name"=> "Korean Won",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "\u20a9",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KWD",
		// 	"name"=> "Kuwaiti Dinar",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "KWD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KGS",
		// 	"name"=> "Kyrgyzstan Som",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "KGS",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LAK",
		// 	"name"=> "Lao Kip",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LAK",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LVL",
		// 	"name"=> "Latvian Lats",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LVL",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LBP",
		// 	"name"=> "Lebanese Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LBP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LSL",
		// 	"name"=> "Lesotho Loti",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LSL",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LRD",
		// 	"name"=> "Liberian Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LRD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LYD",
		// 	"name"=> "Libyan Dinar",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "LYD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LTL",
		// 	"name"=> "Lithuanian Litas",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LTL",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MOP",
		// 	"name"=> "Macau Pataca",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MOP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MKD",
		// 	"name"=> "Macedonian Denar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MKD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MGA",
		// 	"name"=> "Malagasy Ariary",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MGA",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MWK",
		// 	"name"=> "Malawi Kwacha",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MWK",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MYR",
		// 	"name"=> "Malaysian Ringgit",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MYR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MVR",
		// 	"name"=> "Maldives Rufiyaa",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MVR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MTL",
		// 	"name"=> "Maltese Lira",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MRO",
		// 	"name"=> "Mauritania Ouguiya",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MRO",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MUR",
		// 	"name"=> "Mauritius Rupee",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MUR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MXN",
		// 	"name"=> "Mexican Peso",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MX$",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MDL",
		// 	"name"=> "Moldovan Leu",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MDL",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MNT",
		// 	"name"=> "Mongolian Tugrik",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MNT",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MAD",
		// 	"name"=> "Moroccan Dirham",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MAD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MZN",
		// 	"name"=> "Mozambican Metical",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MZN",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MZM",
		// 	"name"=> "Mozambique Metical",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MMK",
		// 	"name"=> "Myanmar Kyat",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MMK",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "NAD",
		// 	"name"=> "Namibia Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "NAD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "NPR",
		// 	"name"=> "Nepalese Rupee",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "NPR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ANG",
		// 	"name"=> "Netherlands Antillian Guilder",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ANG",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BYN",
		// 	"name"=> "New Belarusian Ruble",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "Br",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ],  [
			
		// 	"code"=> "TWD",
		// 	"name"=> "New Taiwan Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "NT$",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "NZD",
		// 	"name"=> "New Zealand Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "NZ$",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "NIO",
		// 	"name"=> "Nicaragua Cordoba Oro",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "NIO",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "NGN",
		// 	"name"=> "Nigerian Naira",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20a6",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KPW",
		// 	"name"=> "North Korean Won",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20a9",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "NOK",
		// 	"name"=> "Norwegian Krone",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "NOK",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PKR",
		// 	"name"=> "Pakistan Rupee",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "PKR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XPD",
		// 	"name"=> "Palladium",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "XPD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PAB",
		// 	"name"=> "Panama Balboa",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "PAB",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PGK",
		// 	"name"=> "Papua New Guinea Kina",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "PGK",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PYG",
		// 	"name"=> "Paraguayan Guarani",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "PYG",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PEN",
		// 	"name"=> "Peruvian Nuevo Sol",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "PEN",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "UYU",
		// 	"name"=> "Peso Uruguayo",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "UYU",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PHP",
		// 	"name"=> "Philippine Peso",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "PHP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XPT",
		// 	"name"=> "Platinum",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "XPT",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PLN",
		// 	"name"=> "Polish Zloty",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "PLN",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GBP",
		// 	"name"=> "Pound Sterling",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u00a3",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "QAR",
		// 	"name"=> "Qatari Rial",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "QAR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "OMR",
		// 	"name"=> "Rial Omani",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "OMR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "RON",
		// 	"name"=> "Romanian Leu",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "RON",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "RWF",
		// 	"name"=> "Rwanda Franc",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "RWF",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "WST",
		// 	"name"=> "Samoa Tala",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "WST",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "STD",
		// 	"name"=> "S\u00e3o Tome and Principe Dobra",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "STD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SAR",
		// 	"name"=> "Saudi Riyal",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SAR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XDR",
		// 	"name"=> "SDR (Special Drawing Rights)",
		// 	"decimal_points"=> 5,
		// 	"symbol"=> "XDR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CSD",
		// 	"name"=> "Serbian Dinar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "RSD",
		// 	"name"=> "Serbian Dinar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "RSD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SCR",
		// 	"name"=> "Seychelles Rupee",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SCR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SLL",
		// 	"name"=> "Sierra Leone Leone",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SLL",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XAG",
		// 	"name"=> "Silver",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "XAG",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SGD",
		// 	"name"=> "Singapore Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SGD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SKK",
		// 	"name"=> "Slovak Koruna",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SIT",
		// 	"name"=> "Slovenian Tolar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SBD",
		// 	"name"=> "Solomon Islands Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SBD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SOS",
		// 	"name"=> "Somali Shilling",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SOS",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ZAR",
		// 	"name"=> "South African Rand",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ZAR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LKR",
		// 	"name"=> "Sri Lanka Rupee",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LKR",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SHP",
		// 	"name"=> "St Helena Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SHP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SDD",
		// 	"name"=> "Sudanese Dinar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SDG",
		// 	"name"=> "Sudanese Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SDG",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SRD",
		// 	"name"=> "Surinam Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SRD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SZL",
		// 	"name"=> "Swaziland Lilangeni",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SZL",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SEK",
		// 	"name"=> "Swedish Krona",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SEK",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CHF",
		// 	"name"=> "Swiss Franc",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CHF",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SYP",
		// 	"name"=> "Syrian Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SYP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TJS",
		// 	"name"=> "Tajik Somoni",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "TJS",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TZS",
		// 	"name"=> "Tanzanian Shilling",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "TZS",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "THB",
		// 	"name"=> "Thai Baht",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u0e3f",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TOP",
		// 	"name"=> "Tonga Pa'anga",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "TOP",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TTD",
		// 	"name"=> "Trinidad and Tobago Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "TTD",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TND",
		// 	"name"=> "Tunisian Dinar",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "TND",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TRY",
		// 	"name"=> "Turkish Lira",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20ba",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TMM",
		// 	"name"=> "Turkmenistan Manat",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TMT",
		// 	"name"=> "Turkmenistani Manat",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "TMT",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AED",
		// 	"name"=> "UAE Dirham",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "AED",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "UGX",
		// 	"name"=> "Uganda Shilling",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "UGX",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "UAH",
		// 	"name"=> "Ukraine Hryvnia",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "UAH",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ],[
			
		// 	"code"=> "UZS",
		// 	"name"=> "Uzbekistan Sum",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "UZS",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "VUV",
		// 	"name"=> "Vanuatu Vatu",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "VUV",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "VEB",
		// 	"name"=> "Venezuelan Bolivar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "VEF",
		// 	"name"=> "Venezuelan Bol\u00edvar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "VEF",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "VND",
		// 	"name"=> "Vietnamese Dong",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20ab",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "YER",
		// 	"name"=> "Yemeni Rial",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "YER",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ZMK",
		// 	"name"=> "Zambian Kwacha",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ZMW",
		// 	"name"=> "Zambian Kwacha",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ZMW",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ZWL",
		// 	"name"=> "Zimbabwe Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ZWL",
		// 	"is_active"=> true,
		// 	"is_custom_flag"=> false
		// ]
    );
}
