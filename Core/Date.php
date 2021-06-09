<?php

class Date
{

    /**
     * Take a sql date and transform it
     *
     * @param string $date
     *
     * @return string
     */
    static function formatSqlDate(string $date): string
    {
        $tranform_to_date = date_create($date);
        $date = date_format($tranform_to_date, 'd-m-y');
        $time = date_format($tranform_to_date, 'h:i:s');

        return "Ajouté le $date à $time";
    }
}
