<?php

namespace DntView\Layout\Modul\Install;

use DntLibrary\Base\Vendor;

class MetaServices
{

    protected $content = '0';

    public function init($postId, $service)
    {
        $defaultContent = $this->content;
        $insertedData[] = array(
            '`post_id`' => $postId,
            '`service`' => $service,
            '`vendor_id`' => Vendor::getId(),
            '`key`' => "price",
            '`value`' => $defaultContent,
            '`content_type`' => "text",
            '`cat_id`' => "2",
            '`description`' => "Price",
            '`order`' => "100",
            '`show`' => "1",
        );
        $insertedData[] = array(
            '`post_id`' => $postId,
            '`service`' => $service,
            '`vendor_id`' => Vendor::getId(),
            '`key`' => "position",
            '`value`' => $defaultContent,
            '`content_type`' => "text",
            '`cat_id`' => "2",
            '`description`' => "Position",
            '`order`' => "200",
            '`show`' => "1",
        );
        $insertedData[] = array(
            '`post_id`' => $postId,
            '`service`' => $service,
            '`vendor_id`' => Vendor::getId(),
            '`key`' => "specialization",
            '`value`' => $defaultContent,
            '`content_type`' => "text",
            '`cat_id`' => "2",
            '`description`' => "Specialization",
            '`order`' => "200",
            '`show`' => "1",
        );
        $insertedData[] = array(
            '`post_id`' => $postId,
            '`service`' => $service,
            '`vendor_id`' => Vendor::getId(),
            '`key`' => "company_name",
            '`value`' => $defaultContent,
            '`content_type`' => "text",
            '`cat_id`' => "2",
            '`description`' => "Company name",
            '`order`' => "400",
            '`show`' => "1",
        );
        $insertedData[] = array(
            '`post_id`' => $postId,
            '`service`' => $service,
            '`vendor_id`' => Vendor::getId(),
            '`key`' => "company_street",
            '`value`' => $defaultContent,
            '`content_type`' => "text",
            '`cat_id`' => "2",
            '`description`' => "Company street",
            '`order`' => "500",
            '`show`' => "1",
        );
        $insertedData[] = array(
            '`post_id`' => $postId,
            '`service`' => $service,
            '`vendor_id`' => Vendor::getId(),
            '`key`' => "company_state",
            '`value`' => $defaultContent,
            '`content_type`' => "text",
            '`cat_id`' => "2",
            '`description`' => "Company state",
            '`order`' => "600",
            '`show`' => "1",
        );
        $insertedData[] = array(
            '`post_id`' => $postId,
            '`service`' => $service,
            '`vendor_id`' => Vendor::getId(),
            '`key`' => "is_premium",
            '`value`' => $defaultContent,
            '`content_type`' => "bool",
            '`cat_id`' => "2",
            '`description`' => "Is premium?",
            '`order`' => "700",
            '`show`' => "1",
        );
        $insertedData[] = array(
            '`post_id`' => $postId,
            '`service`' => $service,
            '`vendor_id`' => Vendor::getId(),
            '`key`' => "recruitment_id",
            '`value`' => $defaultContent,
            '`content_type`' => "bool",
            '`cat_id`' => "2",
            '`description`' => "Recruitment Company ID",
            '`order`' => "800",
            '`show`' => "1",
        );
        
        return $insertedData;
    }

}
