<?php

if ($p_outlet === '') {

                            $sql1 = "SELECT 
                            count(aca.payment_id) as count
                            ,
                            (
                            SELECT sum(a.unit_price*a.qty) -   
                            (select sum(ih_1.discount_amount)
                            from invoice_header ih_1
                            where 
                            ih_1.ledger_id = ih.ledger_id
                            and ih_1.refund_status not in ('Yes')) 
                            + 
                            (
                            SELECT sum(a_1.tax_amount) -
                            (select sum(ih_1.discount_amount*ih_1.tax_code)
                            from invoice_header ih_1
                            where 
                            ih_1.ledger_id = ih.ledger_id
                            and ih_1.refund_status not in ('Yes')) as count  
                            FROM invoice a_1,
                            invoice_header ih
                            where
                            date_format(a.date,'%Y-%m-%d') between '".$p_start_date."' and '".$p_end_date."'
                            and ih.ledger_id = '".$ledger_new."'
                            and ih.ledger_id = a_1.ledger_id
                            and ih.invoice_id = a_1.invoice_id
                            and ih.refund_status not in ('Yes')
                            )as count
                            FROM invoice a ,
                            invoice_header ih
                            where
                            date_format(a.date,'%Y-%m-%d') between '".$p_start_date."' and '".$p_end_date."'
                            and ih.ledger_id = '".$ledger_new."'
                            and ih.ledger_id = a.ledger_id
                            and ih.invoice_id = a.invoice_id
                            and ih.refund_status not in ('Yes')
                            ) as value
                            FROM invoice_header aa,
                            ar_check_all aca
                            where
                            aa.ledger_id = '".$ledger_new."'
                            and aca.invoice_id = aa.invoice_id
                            and aa.refund_status not in  ('Yes')
                            and date_format(aa.invoice_date,'%Y-%m-%d') between '".$p_start_date."' and '".$p_end_date."'
                            ";
}
else{

                            $sql1 = "SELECT 
                            count(aca.payment_id) as count
                            ,
                            (
                            SELECT sum(a.unit_price*a.qty) -   
                            (select sum(ih_1.discount_amount)
                            from invoice_header ih_1
                            where 
                            ih_1.ledger_id = ih.ledger_id
                            and ih_1.outlet_id = ih.outlet_id
                            and ih_1.refund_status not in ('Yes')) 
                            + 
                            (
                            SELECT sum(a_1.tax_amount) -
                            (select sum(ih_1.discount_amount*ih_1.tax_code)
                            from invoice_header ih_1
                            where 
                            ih_1.ledger_id = ih.ledger_id
                            and ih_1.outlet_id = ih.outlet_id
                            and ih_1.refund_status not in ('Yes')) as count  
                            FROM invoice a_1,
                            invoice_header ih
                            where
                            date_format(a.date,'%Y-%m-%d') between '".$p_start_date."' and '".$p_end_date."'
                            and ih.ledger_id = '".$ledger_new."'
                            and ih.ledger_id = a_1.ledger_id
                            and ih.invoice_id = a_1.invoice_id
                            and ih.outlet_id = aa.outlet_id
                            and ih.refund_status not in ('Yes')
                            )as count
                            FROM invoice a ,
                            invoice_header ih
                            where
                            date_format(a.date,'%Y-%m-%d') between '".$p_start_date."' and '".$p_end_date."'
                            and ih.ledger_id = '".$ledger_new."'
                            and ih.ledger_id = a.ledger_id
                            and ih.invoice_id = a.invoice_id
                            and ih.outlet_id = aa.outlet_id
                            and ih.refund_status not in ('Yes')
                            ) as value
                            FROM invoice_header aa,
                            ar_check_all aca
                            where
                            aa.ledger_id = '".$ledger_new."'
                            and aca.invoice_id = aa.invoice_id
                            and aa.refund_status not in  ('Yes')
                            and aa.outlet_id = '".$p_outlet."'
                            and date_format(aa.invoice_date,'%Y-%m-%d') between '".$p_start_date."' and '".$p_end_date."'
                            ";

}

?>