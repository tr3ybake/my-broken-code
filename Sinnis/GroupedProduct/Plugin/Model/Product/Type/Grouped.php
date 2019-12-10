<?php
    namespace Sinnis\GroupedProduct\Model\Plugin\Product\Type;

    class Grouped
    {
        /**
         * @param $subject
         * @param $result
         *
         * @return mixed
         */
        public function afterGetAssociatedProductCollection($subject, $result)
        {
            $result->addAttributeToSelect('*');

            return $result;
        }
    }

