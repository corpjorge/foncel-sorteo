<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'id' => 1,
            'title' => 'A CUÁNTOS ASCIENDEN LOS ACTIVOS DE CEDEC?',
            'answer' => '1_d',
            'choices' => '{ "a": "MENOS DE 1.000.000.0000", "b": "ENTRE 2.000.000.000 - 5.000.000.000", "c": "$100.000.000", "d": "MÁS DE 25.000.000.000"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 2,
            'title' => 'QUÉ ENTIDAD VIGILA LA ACTIVIDAD DE CEDEC?',
            'answer' => '2_b',
            'choices' => '{ "a": "SUPERSALUD", "b": "SUPERSOLIDARIA", "c": "CONTRALORIA", "d": "MINISTERIO DE EDUCACIÓN"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 3,
            'title' => 'CUÁL ES LA ACTIVIDAD DE CEDEC?',
            'answer' => '3_b',
            'choices' => '{ "a": "RESTAURANTES", "b": "PRESTACIÓN DE SERVICIO DE CRÉDITO", "c": "SERVICIO TÉCNICO", "d": "SERVICIOS FUNERARIOS"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 4,
            'title' => 'CON CUÁNTOS EMPLEADOS CUENTA LA COOPERATIVA?',
            'answer' => '4_c',
            'choices' => '{ "a": "15", "b": "22", "c": "19", "d": "30"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 5,
            'title' => 'CUÁLES SON LOS VALORES CORPORATIVOS DE CEDEC?',
            'answer' => '5_d',
            'choices' => '{ "a": "INTEGRIDAD, COMPROMISO", "b": "BONDAD, HUMILDAD, CARIDAD", "c": "RESPETO,HONESTIDAD", "d": "INTEGRIDAD, SOLIDARIDAD, COMPROMISO, VOCACIÓN DE SERVICIO"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 6,
            'title' => 'QUIÉN CERTIFICA LA CALIDAD DE LA PRESTACIÓN DEL SERVICIO DE CRÉDITO A CEDEC?',
            'answer' => '6_d',
            'choices' => '{ "a": "BUREAU VERITAS", "b": "IQNET", "c": "VERITAS VERITAS", "d": "ICONTEC - IQNET"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 7,
            'title' => 'EN QUÉ MES SE ENTREGAN LOS BONOS ESCOLARES CEDEC?',
            'answer' => '7_a',
            'choices' => '{ "a": "DICIEMBRE", "b": "AGOSTO", "c": "OCTUBRE", "d": "JULIO"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 8,
            'title' => 'EN CUÁLES REDES SOCIALES ENCUENTRAS A CEDEC?',
            'answer' => '8_d',
            'choices' => '{ "a": "FACEBOOK", "b": "INSTAGRAM", "c": "YOUTUBE", "d": "TODAS LAS ANTERIORES"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 9,
            'title' => 'EN QUÉ MES SE REALIZÓ LA XXXI ASAMBLEA GENERAL DE DELEGADOS?',
            'answer' => '9_a',
            'choices' => '{ "a": "MARZO", "b": "DICIEMBRE", "c": "ABRIL", "d": "ENERO"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 10,
            'title' => 'CUÁL ES LA DIRECCIÓN DE LA OFICINA DE CEDEC - BARRANQUILLA?',
            'answer' => '10_d',
            'choices' => '{ "a": "EDF. SANTO DOMINGO, CLL 16 NRO 5 - 64 OFIC 304", "b": "CLL 14 NRO 19C - 96. LAS FLORES", "c": "CENTRO MÉDICO LOS EJECUTIVOS", "d": "CRA. 60 NRO. 75 - 130 LA CONCEPCIÓN"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 11,
            'title' => 'EN QUÉ AÑO FUE PROMULGADA EN COLOMBIA LA PRIMERA LEY COOPERATIVA?',
            'answer' => '11_c',
            'choices' => '{ "a": "2000", "b": "1900", "c": "1931", "d": "1815"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 12,
            'title' => 'EN EL AÑO 1988 SE EXPIDE LA LEY QUE RECONOCE LAS COOPERATIVAS DE AHORRO Y CRÉDITO COMO ORGANISMOS FINANCIEROS, ¿CUÁL ES ESTA LEY?',
            'answer' => '12_d',
            'choices' => '{ "a": "LEY 123456789", "b": "LEY DE LA VIDA", "c": "LEY 0", "d": "LEY 79"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 13,
            'title' => 'CUÁL DE ESTOS SÍMBOLOS REPRESENTAN EL COOPERATIVISMO?',
            'answer' => '13_c',
            'choices' => '{ "a": "LA BANDERA", "b": "TODOS LOS ANTERIORES", "c": "EL HIMNO COOPERATIVO", "d": "LOS PINOS"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 14,
            'title' => 'A PARTIR DE CUÁNTOS MESES DESPUÉS DE LA AFILIACIÓN, EL ASOCIADO PUEDE ACCEDER A LOS SERVICIOS DE CRÉDITO Y BENEFICIOS DE CEDEC?',
            'answer' => '14_b',
            'choices' => '{ "a": "12 MESES", "b": "3 MESES", "c": "36 MESES", "d": "1 MES"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 15,
            'title' => 'CUÁNTO ES EL MÍNIMO DE INGRESOS QUE DEBE TENER UN ASOCIADO POTENCIAL PARA AFILIARCE A LA COOPERATIVA?',
            'answer' => '15_b',
            'choices' => '{ "a": "1 SALARIO MLV", "b": "1.7 SALARIOS MLV", "c": "SIN SALARIO", "d": "5 SALARIOS MLV"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 16,
            'title' => 'CUÁL ES EL SALARIO MÍNIMO LEGAL VIGENTE EN COLOMBIA AÑO 2021?',
            'answer' => '16_d',
            'choices' => '{ "a": "$875.308", "b": "$1.007.321", "c": "$682.971", "d": "$908.526"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 17,
            'title' => 'DE CUÁNTOS DOCUMENTOS SE COMPONE UNA SOLICITUD DE CRÉDITO?',
            'answer' => '17_a',
            'choices' => '{ "a": "4", "b": "24", "c": "9", "d": "15"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 18,
            'title' => 'CUÁNTOS PAGARÉS SE DEBEN FIRMAR EN UNA SOLICITUD DE CRÉDITO?',
            'answer' => '18_d',
            'choices' => '{ "a": "2", "b": "4", "c": "3", "d": "1"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 19,
            'title' => 'SI VOY A TRAMITAR UNA SOLICITUD DE CRÉDITO ¿QUÉ COMPROBANTES DE PAGO DEBO PRESENTAR?',
            'answer' => '19_b',
            'choices' => '{ "a": "LOS DEL ÚLTIMO AÑO", "b": "LOS DEL ÚLTIMO MES", "c": "LOS DEL ÚLTIMO TRIMESTRE", "d": "LOS DEL ÚLTIMO SEMESTRE"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 20,
            'title' => 'CUÁL ES EL NÚMERO DE CELULAR DE LA OFICINA DE BARRANQUILLA?',
            'answer' => '20_c',
            'choices' => '{ "a": "3012443127", "b": "3158881122", "c": "3008172787", "d": "3207775511"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 21,
            'title' => 'CUÁNTAS ASAMBLEAS ORDINARIAS ESTÁ OBLIGADA A HACER CEDEC EN EL AÑO?',
            'answer' => '21_a',
            'choices' => '{ "a": "1", "b": "4", "c": "9", "d": "8"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 22,
            'title' => 'EN CUÁL DE ESTOS BANCOS NO TIENE CUENTA CEDEC?',
            'answer' => '22_b',
            'choices' => '{ "a": "BANCO DE BOGOTA", "b": "BCSC", "c": "BANCOLOMBIA", "d": "DAVIVIENDA"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 23,
            'title' => 'SI ME RETIRO DE CEDEC CUÁNTO TIEMPO DEBO ESPERAR PARA REAFILIARME?',
            'answer' => '23_a',
            'choices' => '{ "a": "1 AÑO", "b": "4 AÑOS", "c": "7 AÑOS", "d": "9 MESES"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 24,
            'title' => 'SI NO TENGO OBLIGACIONES PENDIENTES CON CEDEC, CUÁL LÍNEA DE CRÉDITO PUEDO UTILIZAR AL 300% DE MIS APORTES?',
            'answer' => '24_b',
            'choices' => '{ "a": "JUDICIAL", "b": "ORDINARIO", "c": "ESCOLAR", "d": "VEHÍCULO"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 25,
            'title' => 'CÓMO SE LLAMA EL BONO QUE CEDEC ENTREGÓ A SUS ASOCIADOS COMO APOYO DURANTE EL PERÍODO DE CUARENTENA POR PANDEMIA COVID 19?',
            'answer' => '25_c',
            'choices' => '{ "a": "BONO DE CUMPLEAÑOS", "b": "BONO DE AÑO NUEVO", "c": "BONO POR PANDEMIA", "d": "BONO NAVIDEÑO"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 26,
            'title' => 'CUÁL DE ESTAS LÍNEAS DE CRÉDITO NO OFRECE CEDEC EN SU PORTAFOLIO?',
            'answer' => '26_c',
            'choices' => '{ "a": "CRÉDITO ORDINARIO", "b": "CRÉDITO PÓLIZAS Y SEGUROS", "c": "CRÉDITO ALIMENTICIO", "d": "AVANCE DE PRIMAS"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 27,
            'title' => 'CUÁL DE ESTAS LÍNEAS DE CRÉDITO OFRECE CEDEC EN SU PORTAFOLIO?',
            'answer' => '27_b',
            'choices' => '{ "a": "CRÉDITO DE SALUD", "b": "CRÉDITO LIBRE INVERSIÓN", "c": "CRÉDITOS PARA FAMILIAS", "d": "CRÉDITO PARA VIAJES"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 28,
            'title' => 'EL PORTAFOLIO DE CEDEC CUENTA CON CRÉDITOS SOCIALES?',
            'answer' => '28_b',
            'choices' => '{ "a": "NO", "b": "SI", "c": "PUEDE SER", "d": "TAL VEZ"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 29,
            'title' => 'CUÁL ES EL NOMBRE DEL GERENTE DE CEDEC?',
            'answer' => '29_a',
            'choices' => '{ "a": "ROBERTO LATTÁ A", "b": "SANTIAGO GUTIERREZ", "c": "ESTEBAN GONZALEZ", "d": "JULIO GONZÁLEZ PÉREZ"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 30,
            'title' => 'CEDEC CUENTA CON UN FONDO CUYO OBJETIVO ES FACILITAR EL ACCESO Y PERMANENCIA DE LOS ASOCIADOS E HIJOS DE ASOCIADOS DE LOS ESTRATOS 1, 2, 3 EN EL SISTEMA EDUCATIVO EN LOS NIVELES DE EDUCACIÓN FORMAL SUPERIOR, ¿CUÁL ES?',
            'answer' => '30_b',
            'choices' => '{ "a": "FNA", "b": "FONDO INDIVIDUAL DE CEDEC PARA LA EDUCACIÓN SUPERIOR", "c": "FONDO DE EMPLEADOS DE CORELCA", "d": "FONDO PARA EMPLEADORES"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 31,
            'title' => 'CUÁL ES LA DIRECCIÓN DE LA OFICINA DE CEDEC - SANTA MARTA?',
            'answer' => '31_c',
            'choices' => '{ "a": "CENTRO MÉDICO LOS EJECUTIVOS", "b": "EDF. TORRE DE CRISTAL, OFIC. 305", "c": "EDF. SANTO DOMINGO, CLL 16 NRO 5 - 64 OFIC. 304", "d": "CLL 14 NRO 19C - 96. LAS FLORES"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 32,
            'title' => 'CUÁL ES LA DIRECCIÓN DE LA OFICINA DE CEDEC - CARTAGENA?',
            'answer' => '32_d',
            'choices' => '{ "a": "CLL 14 NRO 19C - 96. LAS FLORES", "b": "EDF. TORRE DE CRISTAL, OFIC. 305", "c": "CRA. 60 NRO 75 - 130", "d": "CENTRO MÉDICO LOS EJECUTIVOS"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 33,
            'title' => 'CUÁL ES LA DIRECCIÓN DE LA OFICINA DE CEDEC - RIOHACHA?',
            'answer' => '33_d',
            'choices' => '{ "a": "EDF. SANTO DOMINGO, CLL 16 NRO 5 - 64 OFIC 304", "b": "CLL 14 NRO 19C - 96. LAS FLORES", "c": "CENTRO MÉDICO LOS EJECUTIVOS", "d": "EDF. TORRE DE CRISTAL, OFIC. 305"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 34,
            'title' => 'CUÁL ES LA DIRECCIÓN DE LA OFICINA DE CEDEC - VALLEDUPAR?',
            'answer' => '34_d',
            'choices' => '{ "a": "EDF. TORRE DE CRISTAL, OFIC. 305", "b": "CRA. 60 NRO 75 - 130", "c": "CENTRO MÉDICO LOS EJECUTIVOS", "d": "CLL 14 NRO 19C - 96. LAS FLORES"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 35,
            'title' => 'A TRAVÉS DE QUÉ MEDIO SE PUEDE REALIZAR DESDE LA PÁGINA WEB DE CEDEC PAGOS SEGUROS EN LÍNEA?',
            'answer' => '35_d',
            'choices' => '{ "a": "BANCO", "b": "TRANSFERENCIA", "c": "EFECTIVO", "d": "PSE"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 36,
            'title' => 'ACTUALMENTE CEDEC CUENTA CON SEDES EN CIUDADES COMO',
            'answer' => '36_a',
            'choices' => '{ "a": "TODAS LAS ANTERIORES", "b": "RIOHACHA", "c": "VALLEDUPAR", "d": "SANTA MARTA"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 37,
            'title' => 'ES PARTE DE LA MISIÓN DE CEDEC CONTRIBUIR AL MEJORAMIENTO DE LA CALIDAD DE VIDA DE SUS ASOCIADOS?',
            'answer' => '37_d',
            'choices' => '{ "a": "TAL VEZ", "b": "A VECES", "c": "PUEDE SER", "d": "SÍ"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 38,
            'title' => 'ES PARTE DE LA VISIÓN DE CEDEC SER EL MEJOR ALIADO DE SUS ASOCIADOS?',
            'answer' => '38_d',
            'choices' => '{ "a": "NUNCA", "b": "EN OCASIONES", "c": "ALGUNAS VECES", "d": "SÍ"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 39,
            'title' => 'CÓMO POLÍTICA DEL SISTEMA DE GESTIÓN DE CALIDAD, CEDEC ESTÁ COMPROMETIDA A:',
            'answer' => '39_d',
            'choices' => '{ "a": "SER EL MEJOR ALIADO", "b": "ENTREGAR OPORTUNAMENTE LOS CRÉDITOS", "c": "GENERAR CONFIANZA EN LOS ASOCIADOS", "d": "PROPORCIONAR SERVICIOS DE CRÉDITO QUE CONTRIBUYAN AL MEJORAMIENTO DE LA CALIDAD DE VIDA DE NUESTROS ASOCIADOS Y SU NÚCLEO FAMILIAR CONSIDERANDO NUESTROS VALORES Y PRINCIPIOS COOPERATIVOS"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 40,
            'title' => 'PARA EL AÑO 2010 CUÁNTAS COOPERATIVAS EXISTIAN EN COLOMBIA?',
            'answer' => '40_d',
            'choices' => '{ "a": "1", "b": "2000000", "c": "50", "d": "8533"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 41,
            'title' => 'PARA ACCEDER AL EXTRACTO DE CUENTA A TRAVÉS DEL PORTAL WEB DE CEDEC, SE DEBE REGISTRAR:',
            'answer' => '41_d',
            'choices' => '{ "a": "NOMBREY Y APELLIDO", "b": "CÉDULA DE CIUDADANIA", "c": "APELLIDO Y TELÉFONO", "d": "CÉDULA Y CONTRASEÑA"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 42,
            'title' => 'CUÁL ES EL CORREO INSTITUCIONAL DE LA COOPERATIVA?',
            'answer' => '42_a',
            'choices' => '{ "a": "CEDEC@CEDEC.COM.CO", "b": "CEDEC@CEDEC.ES", "c": "CEDEC@CEDEC.COM.MX", "d": "CEDEC@CEDEC.COM"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 43,
            'title' => 'CUÁL ES LA TASA DE INTERES MÁS ALTA QUE MANEJA ACTUALMENTE CEDEC?',
            'answer' => '43_a',
            'choices' => '{ "a": "1,3", "b": "1", "c": "0,4", "d": "0,9"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 44,
            'title' => 'CUÁL ES LA TASA DE INTERES MÁS BAJA QUE MANEJA ACTUALMENTE CEDEC?',
            'answer' => '44_d',
            'choices' => '{ "a": "0,9", "b": "1", "c": "1,3", "d": "0,4"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 45,
            'title' => 'CUÁL DE ESTOS PRINCIPIOS RIGEN A CEDEC?',
            'answer' => '45_b',
            'choices' => '{ "a": "PARTICIPACIÓN ECONÓMICA DE LOS SOCIOS", "b": "TODAS LAS ANTERIORES", "c": "EDUCACIÓN, ENTRENAMIENTO E INFORMACIÓN", "d": "AUTONOMÍA E INDEPENDENCIA"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 46,
            'title' => 'CUÁL DE LOS SIGUIENTES COMITÉS FORMAN PARTE DE LA ORGANIZACIÓN DE CEDEC?',
            'answer' => '46_c',
            'choices' => '{ "a": "COMITÉ DE EDUCACIÓN", "b": "COMITÉ DE CRÉDITO", "c": "TODAS LAS ANTERIORES", "d": "COMITÉ DE APOYO CORPORATIVO"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 47,
            'title' => 'CUÁNTOS AÑOS CUMPLE CEDEC EN EL AÑO 2021?',
            'answer' => '47_d',
            'choices' => '{ "a": "49", "b": "51", "c": "47", "d": "50"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 48,
            'title' => 'CON QUÉ ÁREA DE CEDEC ME PUEDO COMUNICAR EN CASO DE SOLICITAR INFORMACIÓN PARA TRAMITAR UN CRÉDITO?',
            'answer' => '48_b',
            'choices' => '{ "a": "SISTEMAS", "b": "CRÉDITO Y CARTERA", "c": "CONTABILIDAD", "d": "TESORERÍA"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 49,
            'title' => 'CUÁL DE ESTOS FORMULARIOS ESTÁ RELACIONADO CON LOS SUBSIDIOS EDUCATIVOS?',
            'answer' => '49_d',
            'choices' => '{ "a": "F-CRE-24 - SOLICITUD AUXILIO EDUCATIVO PRUEBAS ICFES", "b": "F-CRE-25 FONDO INDIVICUAL PARA EDUCACIÓN FORMAL ICETEX", "c": "F-CRE-28 - SAE", "d": "TODOS LOS ANTERIORES"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'id' => 50,
            'title' => '¿A QUÉ SECTOR PERTENECEN LOS ASOCIADOS DE CEDEC?',
            'answer' => '50_d',
            'choices' => '{ "a": "SECTOR AGRÍCOLA", "b": "SECTOR GANADERO", "c": "SECTOR MINERO", "d": "SECTOR ENERGÉTICO "}',
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}
