<?php

use app\components\Migration;

/**
 * Class m160805_074317_add_cms_pages
 */
class m160805_074317_add_cms_pages extends Migration
{
    public function up()
    {
        $this->insert('{{%Cms}}', [
            'url' => 'about-us',
            'title' => 'About us',
            'content' => 'About us content',
            'metaTitle' => 'About us',
            'metaDescription' => 'About us description',
            'metaKeywords' => 'About us keywords',
            'createdAt' => time(),
            'updatedAt' => time(),
        ]);

        $this->insert('{{%Cms}}', [
            'url' => 'terms-and-conditions',
            'title' => 'Terms & Conditions',
            'content' => 'Content',
            'metaTitle' => 'Terms & Conditions',
            'metaDescription' => 'Terms & Conditions description',
            'metaKeywords' => 'Terms & Conditions keywords',
            'createdAt' => time(),
            'updatedAt' => time(),
        ]);

        $this->insert('{{%Cms}}', [
            'url' => 'privacy-policy',
            'title' => 'Privacy Policy',
            'content' => 'Content',
            'metaTitle' => 'Privacy Policy',
            'metaDescription' => 'Privacy Policy description',
            'metaKeywords' => 'Privacy Policy keywords',
            'createdAt' => time(),
            'updatedAt' => time(),
        ]);
    }

    public function down()
    {
        $this->delete('{{%Cms}}', ['url' => 'about-us']);
        $this->delete('{{%Cms}}', ['url' => 'terms-and-conditions']);
        $this->delete('{{%Cms}}', ['url' => 'privacy-policy']);
    }
}