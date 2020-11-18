<?php
declare(strict_types=1);

namespace iskanderokilov\TierPrice\ViewModel;

use Magento\Framework\Serialize\SerializerInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;


class TierPrice implements ArgumentInterface
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * TierPrice constructor.
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @return string
     */
    public function getJsonConfig(): string
    {
        return $this->serializer->serialize([
            'qtyIdentifier' => '.product-add-form #qty',
            'priceIdentifier' => '.product-info-price span.price',
            'tierPrices' => '#data-tier-prices-js'
        ]);
    }
}
