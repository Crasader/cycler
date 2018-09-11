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
			"active_flag"=> true,
			"is_custom_flag"=> false
		], 
		
		[
			
			"code"=> "EUR",
			"name"=> "Euro",
			"decimal_points"=> 2,
			"symbol"=> "\u20ac",
			"active_flag"=> true,
			"is_custom_flag"=> false
		],

		[
			
			"code"=> "RUB",
			"name"=> "Russian Ruble",
			"decimal_points"=> 2,
			"symbol"=> "RUB",
			"active_flag"=> true,
			"is_custom_flag"=> false
		],

		[
			
			"code"=> "ILS",
			"name"=> "New Israeli Shekel",
			"decimal_points"=> 2,
			"symbol"=> "\u20aa",
			"active_flag"=> true,
			"is_custom_flag"=> false
		],
		
  //   	[
		// 	"code"=> "AFN",
		// 	"name"=> "Afghanistan Afghani",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "AFN",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ALL",
		// 	"name"=> "Albanian Lek",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ALL",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "DZD",
		// 	"name"=> "Algerian Dinar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "DZD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AOA",
		// 	"name"=> "Angolan Kwanza",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "AOA",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ARS",
		// 	"name"=> "Argentine Peso",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ARS",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AMD",
		// 	"name"=> "Armenian Dram",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "AMD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AWG",
		// 	"name"=> "Aruban Guilder",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "AWG",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AUD",
		// 	"name"=> "Australian Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "A$",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AZN",
		// 	"name"=> "Azerbaijan Manat",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "AZN",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AZM",
		// 	"name"=> "Azerbaijan Old Manat",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BSD",
		// 	"name"=> "Bahamian Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BSD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BHD",
		// 	"name"=> "Bahraini Dinar",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "BHD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BDT",
		// 	"name"=> "Bangladesh Taka",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BDT",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BBD",
		// 	"name"=> "Barbados Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BBD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BYR",
		// 	"name"=> "Belarussian Ruble",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "BYR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BZD",
		// 	"name"=> "Belize Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BZD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BMD",
		// 	"name"=> "Bermudian Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BMD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BTN",
		// 	"name"=> "Bhutan Ngultrum",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BTN",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XBT",
		// 	"name"=> "Bitcoin",
		// 	"decimal_points"=> 8,
		// 	"symbol"=> "\u0e3f",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BOB",
		// 	"name"=> "Bolivian Boliviano",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BOB",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BAM",
		// 	"name"=> "Bosnia and Herzegovina Convertible Marks",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BAM",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BWP",
		// 	"name"=> "Botswana Pula",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BWP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BRL",
		// 	"name"=> "Brazilian Real",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "R$",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BND",
		// 	"name"=> "Brunei Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BND",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BGN",
		// 	"name"=> "Bulgarian Lev",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "BGN",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BIF",
		// 	"name"=> "Burundi Franc",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "BIF",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KHR",
		// 	"name"=> "Cambodia Riel",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "KHR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CAD",
		// 	"name"=> "Canadian Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CA$",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CVE",
		// 	"name"=> "Cape Verde Escudo",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CVE",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KYD",
		// 	"name"=> "Cayman Islands Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "KYD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XOF",
		// 	"name"=> "CFA Franc BCEAO",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "CFA",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XAF",
		// 	"name"=> "CFA Franc BEAC",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "FCFA",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XPF",
		// 	"name"=> "CFP Franc",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "CFPF",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CLP",
		// 	"name"=> "Chilean Peso",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "CLP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CLF",
		// 	"name"=> "Chilean Unidad de Fomento",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CLF",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CNY",
		// 	"name"=> "Chinese Yuan Renminbi",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CN\u00a5",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "COP",
		// 	"name"=> "Colombian Peso",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "COP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KMF",
		// 	"name"=> "Comorian Franc",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "KMF",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CRC",
		// 	"name"=> "Costa Rican Colon",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20a1",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "HRK",
		// 	"name"=> "Croatian Kuna",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "HRK",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CUP",
		// 	"name"=> "Cuban Peso",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CUP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CYP",
		// 	"name"=> "Cyprus Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CZK",
		// 	"name"=> "Czech Koruna",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CZK",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "DKK",
		// 	"name"=> "Danish Krone",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "DKK",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "DJF",
		// 	"name"=> "Djibouti Franc",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "DJF",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "DOP",
		// 	"name"=> "Dominican Peso",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "DOP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XCD",
		// 	"name"=> "East Caribbean Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "EC$",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "EGP",
		// 	"name"=> "Egyptian Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "EGP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SVC",
		// 	"name"=> "El Salvador Colon",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20a1",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ERN",
		// 	"name"=> "Eritrea Nafka",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ERN",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "EEK",
		// 	"name"=> "Estonian Kroon",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ETB",
		// 	"name"=> "Ethiopian Birr",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ETB",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "FKP",
		// 	"name"=> "Falkland Islands Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "FKP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "FJD",
		// 	"name"=> "Fiji Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "FJD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CDF",
		// 	"name"=> "Franc Congolais",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CDF",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GMD",
		// 	"name"=> "Gambian Dalasi",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "GMD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GEL",
		// 	"name"=> "Georgian Lari",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "GEL",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GHC",
		// 	"name"=> "Ghana Cedi",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GHS",
		// 	"name"=> "Ghanaian Cedi",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "GHS",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GIP",
		// 	"name"=> "Gibraltar Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "GIP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XAU",
		// 	"name"=> "Gold",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "XAU",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GTQ",
		// 	"name"=> "Guatemala Quetzal",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "GTQ",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GNF",
		// 	"name"=> "Guinean Franc",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "GNF",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GYD",
		// 	"name"=> "Guyana Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "GYD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "HTG",
		// 	"name"=> "Haiti Gourde",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "HTG",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "HNL",
		// 	"name"=> "Honduras Lempira",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "HNL",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "HKD",
		// 	"name"=> "Hong Kong Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "HK$",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "HUF",
		// 	"name"=> "Hungarian Forint",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "HUF",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ISK",
		// 	"name"=> "Iceland Krona",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "ISK",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "INR",
		// 	"name"=> "Indian Rupee",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20a8",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "IDR",
		// 	"name"=> "Indonesian Rupiah",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "IDR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "IRR",
		// 	"name"=> "Iranian Rial",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "IRR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "IQD",
		// 	"name"=> "Iraqi Dinar",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "IQD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "JMD",
		// 	"name"=> "Jamaican Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "JMD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "JPY",
		// 	"name"=> "Japanese Yen",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "\u00a5",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "JOD",
		// 	"name"=> "Jordanian Dinar",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "JOD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KZT",
		// 	"name"=> "Kazakhstan Tenge",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "KZT",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KES",
		// 	"name"=> "Kenyan Shilling",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "KES",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KRW",
		// 	"name"=> "Korean Won",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "\u20a9",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KWD",
		// 	"name"=> "Kuwaiti Dinar",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "KWD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KGS",
		// 	"name"=> "Kyrgyzstan Som",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "KGS",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LAK",
		// 	"name"=> "Lao Kip",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LAK",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LVL",
		// 	"name"=> "Latvian Lats",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LVL",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LBP",
		// 	"name"=> "Lebanese Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LBP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LSL",
		// 	"name"=> "Lesotho Loti",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LSL",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LRD",
		// 	"name"=> "Liberian Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LRD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LYD",
		// 	"name"=> "Libyan Dinar",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "LYD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LTL",
		// 	"name"=> "Lithuanian Litas",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LTL",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MOP",
		// 	"name"=> "Macau Pataca",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MOP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MKD",
		// 	"name"=> "Macedonian Denar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MKD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MGA",
		// 	"name"=> "Malagasy Ariary",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MGA",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MWK",
		// 	"name"=> "Malawi Kwacha",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MWK",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MYR",
		// 	"name"=> "Malaysian Ringgit",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MYR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MVR",
		// 	"name"=> "Maldives Rufiyaa",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MVR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MTL",
		// 	"name"=> "Maltese Lira",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MRO",
		// 	"name"=> "Mauritania Ouguiya",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MRO",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MUR",
		// 	"name"=> "Mauritius Rupee",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MUR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MXN",
		// 	"name"=> "Mexican Peso",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MX$",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MDL",
		// 	"name"=> "Moldovan Leu",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MDL",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MNT",
		// 	"name"=> "Mongolian Tugrik",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MNT",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MAD",
		// 	"name"=> "Moroccan Dirham",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MAD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MZN",
		// 	"name"=> "Mozambican Metical",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MZN",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MZM",
		// 	"name"=> "Mozambique Metical",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "MMK",
		// 	"name"=> "Myanmar Kyat",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "MMK",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "NAD",
		// 	"name"=> "Namibia Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "NAD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "NPR",
		// 	"name"=> "Nepalese Rupee",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "NPR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ANG",
		// 	"name"=> "Netherlands Antillian Guilder",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ANG",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "BYN",
		// 	"name"=> "New Belarusian Ruble",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "Br",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ],  [
			
		// 	"code"=> "TWD",
		// 	"name"=> "New Taiwan Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "NT$",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "NZD",
		// 	"name"=> "New Zealand Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "NZ$",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "NIO",
		// 	"name"=> "Nicaragua Cordoba Oro",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "NIO",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "NGN",
		// 	"name"=> "Nigerian Naira",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20a6",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "KPW",
		// 	"name"=> "North Korean Won",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20a9",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "NOK",
		// 	"name"=> "Norwegian Krone",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "NOK",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PKR",
		// 	"name"=> "Pakistan Rupee",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "PKR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XPD",
		// 	"name"=> "Palladium",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "XPD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PAB",
		// 	"name"=> "Panama Balboa",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "PAB",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PGK",
		// 	"name"=> "Papua New Guinea Kina",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "PGK",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PYG",
		// 	"name"=> "Paraguayan Guarani",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "PYG",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PEN",
		// 	"name"=> "Peruvian Nuevo Sol",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "PEN",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "UYU",
		// 	"name"=> "Peso Uruguayo",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "UYU",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PHP",
		// 	"name"=> "Philippine Peso",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "PHP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XPT",
		// 	"name"=> "Platinum",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "XPT",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "PLN",
		// 	"name"=> "Polish Zloty",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "PLN",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "GBP",
		// 	"name"=> "Pound Sterling",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u00a3",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "QAR",
		// 	"name"=> "Qatari Rial",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "QAR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "OMR",
		// 	"name"=> "Rial Omani",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "OMR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "RON",
		// 	"name"=> "Romanian Leu",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "RON",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "RWF",
		// 	"name"=> "Rwanda Franc",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "RWF",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "WST",
		// 	"name"=> "Samoa Tala",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "WST",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "STD",
		// 	"name"=> "S\u00e3o Tome and Principe Dobra",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "STD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SAR",
		// 	"name"=> "Saudi Riyal",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SAR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XDR",
		// 	"name"=> "SDR (Special Drawing Rights)",
		// 	"decimal_points"=> 5,
		// 	"symbol"=> "XDR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CSD",
		// 	"name"=> "Serbian Dinar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "RSD",
		// 	"name"=> "Serbian Dinar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "RSD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SCR",
		// 	"name"=> "Seychelles Rupee",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SCR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SLL",
		// 	"name"=> "Sierra Leone Leone",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SLL",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "XAG",
		// 	"name"=> "Silver",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "XAG",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SGD",
		// 	"name"=> "Singapore Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SGD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SKK",
		// 	"name"=> "Slovak Koruna",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SIT",
		// 	"name"=> "Slovenian Tolar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SBD",
		// 	"name"=> "Solomon Islands Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SBD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SOS",
		// 	"name"=> "Somali Shilling",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SOS",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ZAR",
		// 	"name"=> "South African Rand",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ZAR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "LKR",
		// 	"name"=> "Sri Lanka Rupee",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "LKR",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SHP",
		// 	"name"=> "St Helena Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SHP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SDD",
		// 	"name"=> "Sudanese Dinar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SDG",
		// 	"name"=> "Sudanese Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SDG",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SRD",
		// 	"name"=> "Surinam Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SRD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SZL",
		// 	"name"=> "Swaziland Lilangeni",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SZL",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SEK",
		// 	"name"=> "Swedish Krona",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SEK",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "CHF",
		// 	"name"=> "Swiss Franc",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "CHF",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "SYP",
		// 	"name"=> "Syrian Pound",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "SYP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TJS",
		// 	"name"=> "Tajik Somoni",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "TJS",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TZS",
		// 	"name"=> "Tanzanian Shilling",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "TZS",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "THB",
		// 	"name"=> "Thai Baht",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u0e3f",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TOP",
		// 	"name"=> "Tonga Pa'anga",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "TOP",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TTD",
		// 	"name"=> "Trinidad and Tobago Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "TTD",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TND",
		// 	"name"=> "Tunisian Dinar",
		// 	"decimal_points"=> 3,
		// 	"symbol"=> "TND",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TRY",
		// 	"name"=> "Turkish Lira",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20ba",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TMM",
		// 	"name"=> "Turkmenistan Manat",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "TMT",
		// 	"name"=> "Turkmenistani Manat",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "TMT",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "AED",
		// 	"name"=> "UAE Dirham",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "AED",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "UGX",
		// 	"name"=> "Uganda Shilling",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "UGX",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "UAH",
		// 	"name"=> "Ukraine Hryvnia",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "UAH",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ],[
			
		// 	"code"=> "UZS",
		// 	"name"=> "Uzbekistan Sum",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "UZS",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "VUV",
		// 	"name"=> "Vanuatu Vatu",
		// 	"decimal_points"=> 0,
		// 	"symbol"=> "VUV",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "VEB",
		// 	"name"=> "Venezuelan Bolivar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "VEF",
		// 	"name"=> "Venezuelan Bol\u00edvar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "VEF",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "VND",
		// 	"name"=> "Vietnamese Dong",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "\u20ab",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "YER",
		// 	"name"=> "Yemeni Rial",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "YER",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ZMK",
		// 	"name"=> "Zambian Kwacha",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ZMW",
		// 	"name"=> "Zambian Kwacha",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ZMW",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ], [
			
		// 	"code"=> "ZWL",
		// 	"name"=> "Zimbabwe Dollar",
		// 	"decimal_points"=> 2,
		// 	"symbol"=> "ZWL",
		// 	"active_flag"=> true,
		// 	"is_custom_flag"=> false
		// ]
    );
}
