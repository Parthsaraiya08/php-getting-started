<?php
        // d0ublezer0 recent viewed products

        function getRecentProducts($currentId){
            $actualIds=false;
            $rProducts=false;
            
            $rSession = JFactory::getSession();
            $rIds = $rSession->get('vmlastvisitedproductids', array(), 'vm'); // get recent viewed from browser session
            if (is_array($rIds)){ 
                foreach($rIds as $rId){
                    if ($rId!=$currentId) $actualIds[]=$rId; // cut out from array currently viewed product 
                }  
            }

            if (is_array($actualIds)){
                if (!class_exists('VirtueMartModelProducts')) // check possible if VM products class exists
                    JModel::addIncludePath(JPATH_VM_ADMINISTRATOR . DS . 'models'); // if not exists, add them
                $rModel = JModel::getInstance('Product', 'VirtueMartModel');

                $recent_products_rows = VmConfig::get('recent_products_rows'); // set in VM admin panel
                $products_per_row = VmConfig::get('homepage_products_per_row'); // set in VM admin panel
                $recent_products_count = $products_per_row * $recent_products_rows; // get max recent products count

                $rProducts = $rModel->getProducts($actualIds, false, false);  // no front, no calc, only published
            }
            if (is_array($rProducts)) $rProducts=array_slice($rProducts,0,$recent_products_count); // return only allowed num of products

            return $rProducts;
        }

        $recentProducts=getRecentProducts($this->product->virtuemart_product_id);
        if ($recentProducts){ // if we get recent products, display them
        ?>
        <div class="product-recent-products">
            <h2>Recently viewed products:</h2>
            <ul class="recent-list">
                <?php
                    foreach ($recentProducts as $rProduct) {
                    ?>
                    <li>
                        <a href="<?php echo JRoute::_('Product1.php?option=com_virtuemart&view=productdetails&virtuemart_product_id='.$rProduct->virtuemart_product_id.'&virtuemart_category_id='.$rProduct->virtuemart_category_id); ?>">
                            <?php echo $rProduct->product_name; ?>
                        </a>
                    </li>
                    <?php } ?>
            </ul>
        </div>
        <?php
        }
?>