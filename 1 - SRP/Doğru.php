<?php

// Refactored

class Report
{
    public function getTitle()
    {
        return "Report Title";
    }

    public function getDate()
    {
        return "2021-02-09";
    }

    public function getContents()
    {
        return [
            "title" => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }
}

interface ReportFormattable
{
    public function format(Report $report);
}

class JsonReportFormatter implements ReportFormattable
{
    public function format(Report $report)
    {
        return json_encode($report->getContents());
    }
}
