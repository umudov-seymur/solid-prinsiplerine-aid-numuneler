<?php

// SRP qaydasını pozan kod
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

    public function formatJson()
    {
        return json_encode($this->getContents());
    }
}
