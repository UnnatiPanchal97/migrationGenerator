<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebay_products2', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->unsignedBigInteger('ebay_id')->nullable()->index('ebay_id')->comment('Primary key Of ebay product table');
            $table->text('condition_definition')->nullable()->comment('This string value provides more details about the item\'s condition.');
            $table->text('description')->nullable()->comment('description of thre item');
            $table->text('product_description')->nullable()->comment('description of the item');
            $table->mediumText('selling_high_bidder')->nullable()->comment('for ended auction listings that have a winning bidder, this field is a container for the high bidder\'s user ID. For ended, single-item, fixed-price listings also stored in serialized format');
            $table->mediumText('business_seller_details')->nullable()->comment('seller information');
            $table->mediumText('charity_details')->nullable()->comment('this container identifies the nonprofit organization that will benefit with a percentage of the proceeds from the sale of an item through an auction or fixed-price listing.');
            $table->mediumText('seller_vacation_note')->nullable()->comment('if the seller of the item is currently on vacation');
            $table->mediumText('seller_shipping_profile')->nullable()->comment('shipping profile applicable for this item');
            $table->mediumText('seller_details')->nullable()->comment('details of the seller');
            $table->mediumText('seller_return_profile')->nullable()->comment('return profile applicable for this item');
            $table->mediumText('seller_payment_profile')->nullable()->comment('payment profile applicable for this item');
            $table->text('shipping_service_cost_override_list')->nullable()->comment('this container is used when the seller wants to override the flat shipping costs for all domestic and/or all international shipping services defined in the Business Policies shipping profile referenced in the SellerProfiles');
            $table->mediumText('shipping_details')->nullable()->comment('details of the shipping items');
            $table->mediumText('extended_seller_contact_details')->nullable()->comment('extended contact information for sellers using the Classified Ad format. Specifies the days and hours when the seller can be contacted');
            $table->mediumText('listing_checkout_redirect_preference_details')->nullable()->comment('pro Stores listing level preferences regarding the store to which checkout should be redirected for the listing if ThirdPartyCheckout is true');
            $table->mediumText('store_front')->nullable()->comment('contains information related to the item in the context of a seller\'s eBay Store. Applicable for auctions and fixed-price listings');
            $table->mediumText('item_policy_violation_details')->nullable()->comment('Specifies the details of policy violations if the item was administratively canceled');
            $table->mediumText('picture_details')->nullable()->comment('container consists of the data associated with photos within the listing');
            $table->mediumText('free_added_category_details')->nullable()->comment('id for a second category that eBay added as a free promotion. You cannot add this yourself. Only returned if the item was listed in a single category and eBay added a free second category.');
            $table->mediumText('buyer_requirement_details')->nullable()->comment('buyer requirement details');
            $table->mediumText('return_policy')->nullable()->comment('return policy details');
            $table->mediumText('discount_price_info')->nullable()->comment('discount price information details');
            $table->mediumText('shipping_package_details')->nullable()->comment('shipping package details');
            $table->mediumText('product_listing_details')->nullable()->comment('specifies stock product information to include in a listing. Only applicable when listing items with product details');
            $table->mediumText('item_specifics_details')->nullable()->comment('all item specific detail store in serialized format');
            $table->mediumText('secondary_category_details')->nullable()->comment('id for second category in which the item is listed');
            $table->mediumText('revise_status_info')->nullable()->comment('indicates whether an item has been revised since the listing became active ');
            $table->mediumText('pickup_in_store_details')->nullable()->comment('seller to enable a listing with the \'In-Store Pickup\' or \'Click and Collect\' features.');
            $table->mediumText('payment_details')->nullable()->comment('this fields is used in an Add/Revise/Relist call if the seller is selling a motor vehicle, and is requiring an initial deposit on that vehicle');
            $table->text('discount_price_detail')->nullable()->comment('Discount details of product');
            $table->integer('modified_by')->nullable()->comment('Who Modified This Record');
            $table->dateTime('inserted_date')->comment('Date & time when this record was inserted');
            $table->dateTime('modified_date')->nullable()->comment('Date & time when this record was last modified');
            $table->timestamp('last_modified')->useCurrentOnUpdate()->useCurrent()->comment('Last modification time stamp of this record');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();

            $table->unique(['ebay_id'], 'ebay_id_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ebay_products2');
    }
};
