<?php

ini_set("max_execution_time", 5000);
require_once "Dadata.php";



function QueryDataElement($val, $quote = "'"){
    return $val === null ? "null" : ($quote.$val.$quote);
}




//$db = pg_pconnect("host=localhost port=5432 dbname=test user=postgres password=postgres");
//
//$ogrn_list = pg_fetch_all(pg_query($db, "select ogrn, inn from egrul.olddata2"));
//
//pg_close($db);


//$result = [];
//try {
//    $dadata = new Dadata("0000000000000000000000000000000000000000");
//    $dadata->init();
//
//
////$fields = array("query"=>"1021300833916 1307000362", "count"=>20);
////var_dump( $dadata->suggest("party", $fields));
//
//
//    foreach ($ogrn_list as $item) {
////        $fields = array("query"=>$item["ogrn"].($item['kpp'] !== null ? " ".explode("/",$item['kpp'])[0] : ""), "count"=>20);
//        $fields = array("query"=>$item["ogrn"]." ".$item['inn'], "count"=>20);
//        $res = $dadata->suggest("party", $fields);
//        $result[] = $res;
//    }
//
//}catch (Exception $e){
//    echo "error ". count($result). "<br>".$e->getMessage();
//}finally{
//    file_put_contents('data.json', json_encode($result,  JSON_UNESCAPED_UNICODE));
//    $dadata->close();
//}
//echo "done ". count($result);






//$db = pg_pconnect("host=localhost port=5432 dbname=test user=postgres password=postgres");
//$r = json_decode(file_get_contents('data.json'));
//$res = [];
//
//foreach ($r as $item) {
//    foreach ($item->suggestions as $sug) {
//        $full = $sug->data->name->full_with_opf;
//        $short = $sug->data->name->short_with_opf;
//        $inn = $sug->data->inn;
//        $ogrn = $sug->data->ogrn;
//        $okved = $sug->data->okved;
//        $kpp = $sug->data->kpp;
//        $res[] = pg_query($db, "insert into egrul.actual2 values ('{$full}', '{$short}', '{$ogrn}', '{$inn}', '{$okved}', '{$kpp}')");
//    }
//}
//pg_close($db);





//$db = pg_pconnect("host=10.1.92.80 port=5433 dbname=birchik user=postgres password=postgres");
//$r = json_decode(file_get_contents('data220520.json'));
//
//foreach ($r as $item) {
//    foreach ($item->suggestions as $suggest) {
//        $sug = $suggest->data;
//        if($sug->branch_type === "MAIN") {
//            $dadata_id = QueryDataElement($sug->hid);
//
//            $full = QueryDataElement($sug->name->full_with_opf);
//            $short = QueryDataElement($sug->name->short_with_opf);
//
//            $opf_type = QueryDataElement($sug->opf->type, "");
//            $opf_code = QueryDataElement($sug->opf->code, "");
//            $opf_full = QueryDataElement($sug->opf->full);
//            $opf_short = QueryDataElement($sug->opf->short);
//
//            $management_name = QueryDataElement($sug->management->name);
//            $management_post = QueryDataElement($sug->management->post);
//
//            $state_status = QueryDataElement($sug->state->status);
//            $state_act_date = QueryDataElement($sug->state->actuality_date);
//            $state_reg_date = QueryDataElement($sug->state->registration_date);
//            $state_liquidate_date = QueryDataElement($sug->state->liquidation_date);
//
//            $type = QueryDataElement($sug->type);
//            $branch_count = QueryDataElement($sug->branch_count, "");
//            $kpp = QueryDataElement($sug->kpp);
//            $inn = QueryDataElement($sug->inn);
//            $ogrn = QueryDataElement($sug->ogrn);
//            $ogrn_date = QueryDataElement($sug->ogrn_date);
//            $okpo = QueryDataElement($sug->okpo);
//            $okved = QueryDataElement($sug->okved);
//            $okved_type = QueryDataElement($sug->okved_type);
//            $okveds = QueryDataElement($sug->okveds);
//
//            $okato = QueryDataElement($sug->address->data->okato);
//            $oktmo = QueryDataElement($sug->address->data->oktmo);
//            $address = QueryDataElement($sug->address->value);
//            $address_egrul = QueryDataElement($sug->address->unrestricted_value);
//
//            if ($okveds !== 'null') echo $dadata_id."<br>";
//
//            pg_query($db, "INSERT INTO source.dadata_org(
//	dadata_id, name_full_with_opf, name_short_with_opf, opf_type, opf_code, opf_full, opf_short, management_name, management_post, state_status, state_act_date, state_reg_date, state_liquidate_date, type, branch_count, kpp, inn, ogrn, ogrn_date, okpo, okved, okved_type, okveds, okato, oktmo, address, address_egrul)
//	VALUES ({$dadata_id}, {$full}, {$short}, {$opf_type}, {$opf_code}, {$opf_full}, {$opf_short}, {$management_name}, {$management_post}, {$state_status}, {$state_act_date}, {$state_reg_date}, {$state_liquidate_date}, {$type}, {$branch_count}, {$kpp}, {$inn}, {$ogrn}, {$ogrn_date}, {$okpo}, {$okved}, {$okved_type}, {$okveds}, {$okato}, {$oktmo}, {$address}, {$address_egrul});");
//        }
//    }
//}
//
//echo 'done';
//pg_close($db);
