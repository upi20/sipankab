<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfolioSubKategoriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_sub_kategori')->delete();
        
        \DB::table('portfolio_sub_kategori')->insert(array (
            0 => 
            array (
                'id' => 50,
                'kategori_id' => 17,
                'urutan' => 1,
                'nama' => 'Banner or Billboard Design',
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
                'slug' => 'banner-or-billboard-design',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            1 => 
            array (
                'id' => 51,
                'kategori_id' => 17,
                'urutan' => 2,
                'nama' => 'Poster Design',
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
                'slug' => 'poster-design',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            2 => 
            array (
                'id' => 106,
                'kategori_id' => 16,
                'urutan' => 4,
                'nama' => 'Website Maintenance',
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
                'slug' => 'website-maintenance',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-04 01:51:19',
            ),
            3 => 
            array (
                'id' => 107,
                'kategori_id' => 16,
                'urutan' => 3,
                'nama' => 'Website Development',
                'judul' => 'We design and develop web and mobile applications for our clients worldwide',
                'sub_judul' => 'Lorem ipsum dolor sit amet, sed nulla ante amet, elementum tincidunt arcu sed laoreet, natoque ac eget imperdiet. Ac scelerisque nibh dolores consectetuer,',
                'foto' => '20230504024934.png',
                'tampilkan_client' => 1,
                'tampilkan_testimoni' => 1,
                'slug' => 'website-development',
                'keterangan' => '<div class="desc-cat">
<h3 style="text-align:center"><strong>Web Programming Service: Creating Efficient and Secure Websites</strong></h3><p style="text-align:justify">Web programming service refers to the process of creating, designing, and developing websites or web applications using various programming languages, tools, and frameworks. It involves the use of multiple technologies and techniques to create websites that are visually appealing, functional, and user-friendly. Web programming is a critical aspect of website development, as it determines the quality of the website, the user experience, and the overall performance of the website. The importance of web programming cannot be overstated, as it plays a vital role in the success of any online business. With the increasing number of businesses moving online, the demand for web programming has increased significantly. Web programming is essential for creating websites that are visually appealing, user-friendly, and responsive to different devices. They also ensure that the website is secure, functional, and efficient, providing a seamless user experience.</p><h4 style="text-align:justify"><strong>What is Web Programming Service?</strong></h4><ol><li style="text-align:justify"><p><strong>Definition. </strong>Web programming refers to the process of designing, creating, and developing websites or web applications using various programming languages, tools, and frameworks. It involves the use of multiple technologies and techniques to create websites that are visually appealing, functional, and user-friendly. The programming languages used for web programming include HTML, CSS, JavaScript, PHP, Python, Ruby, and many others.</p></li><li style="text-align:justify"><p><strong>The Services offered. </strong>Web programming offers a range of services, including web design, web development, content management, e-commerce solutions, mobile application development, and many others. Web design involves creating the look and feel of the website, including the layout, color scheme, and typography. Web development involves the creation of the website\'s functionality, such as database integration, user authentication, and user management. Content management involves creating, organizing, and managing website content, including text, images, and multimedia. E-commerce solutions involve the integration of online payment systems and shopping cart functionality. Mobile application development involves creating mobile applications compatible with various mobile devices.</p></li><li style="text-align:justify"><p><strong>Examples of web programming service</strong></p></li></ol><p style="text-align:justify">Some examples of web programming include:</p><ul><li style="text-align:justify"><p>WordPress Development: This involves the creation of websites using the WordPress platform, which is a popular content management system (CMS) that allows for easy website management.</p></li><li style="text-align:justify"><p>E-commerce Development: This involves the creation of e-commerce websites that allow businesses to sell their products or services online.</p></li><li style="text-align:justify"><p>Custom Web Development: This involves the creation of custom websites that are tailored to the specific needs of the business.</p></li><li style="text-align:justify"><p>Mobile Application Development: This involves the creation of mobile applications that are compatible with various mobile devices.</p></li><li style="text-align:justify"><p>Responsive Web Design: This involves the creation of websites that are optimized for different devices, such as desktops, laptops, tablets, and smartphones.</p></li></ul><h4 style="text-align:justify"><strong>Benefits of Web Programming Service</strong></h4><p style="text-align:justify">Web programming can provide a wide range of benefits to businesses looking to establish or improve their online presence. Here are some of the most significant benefits that web programming can offer:</p><ol><li style="text-align:justify"><p><strong>Customization of the website: </strong>One of the most significant benefits of web programming is the ability to customize a website to meet the specific needs and requirements of a business. With web programming, businesses can create a unique online presence that reflects their brand identity and values. The programming service provider can work closely with the business to understand their goals and develop a website that meets those objectives.</p></li><li style="text-align:justify"><p><strong>Improved website functionality and user experience: </strong>Web programming can help businesses create websites that are not only visually appealing but also highly functional and user-friendly. These services can help optimize website performance and ensure that visitors can easily navigate and interact with the website.&nbsp;</p></li><li style="text-align:justify"><p><strong>Regular website maintenance and updates</strong>: A website is not a static entity; it requires regular maintenance and updates to stay up-to-date and relevant. Web programming can provide businesses with ongoing maintenance and support services to ensure that their website remains functional and up-to-date. This can include fixing bugs, updating software, and adding new features and functionality.</p></li><li style="text-align:justify"><p><strong>Time and cost savings</strong>: Hiring a web programming provider can save businesses significant time and money compared to building a website in-house. With a programming service, businesses can leverage the technical expertise and resources of the service provider, which can reduce the time and cost involved in developing and maintaining a website.</p></li><li style="text-align:justify"><p><strong>Increased website security</strong>: Web programming can help businesses ensure that their website is secure and protected from online threats. The service provider can implement security measures such as firewalls, encryption, and regular backups to prevent data breaches and other security risks. This can help businesses avoid costly and damaging security incidents that could damage their reputation and customer trust.</p></li></ol><h4 style="text-align:justify"><strong>Choosing the Right Web Programming Service Provider</strong></h4><p style="text-align:justify">Choosing the right web programming provider can be a critical decision for businesses looking to establish or improve their online presence. Here are some factors to consider when selecting a web programming provider:</p><ol><li style="text-align:justify"><p><strong>Expertise and experience</strong>: One of the most critical factors to consider when choosing a web programming provider is their expertise and experience. The provider should have a proven track record of delivering high-quality web programming and be well-versed in the latest web development technologies and trends.</p></li><li style="text-align:justify"><p><strong>Services offered</strong>: When evaluating web programming providers, it is essential to consider the range of services they offer. The provider should be able to offer a broad range of web programming, including website design, development, e-commerce solutions, content management systems, and other related services.</p></li><li style="text-align:justify"><p><strong>Portfolio and references</strong>: Another crucial factor to consider when selecting a web programming provider is their portfolio and references. The provider should have a strong portfolio of past projects that demonstrate their skills and expertise. Additionally, they should be able to provide references from past clients who can attest to their professionalism, responsiveness, and quality of work.</p></li><li style="text-align:justify"><p><strong>Communication and collaboration: </strong>Effective communication and collaboration are essential for a successful web programming project. The provider should be able to communicate clearly and effectively with the business and work collaboratively to achieve the business\'s goals. The provider should be responsive to questions and concerns and be able to provide regular updates on the project\'s progress.</p></li><li style="text-align:justify"><p><strong>Cost and budget</strong>: Finally, cost and budget are critical factors to consider when selecting a web programming service provider. The provider should offer transparent pricing and be able to work within the business\'s budget. However, it is essential to keep in mind that the lowest-priced provider may not always be the best option, as quality and expertise are critical factors to consider.</p></li></ol><p style="text-align:justify">That is all about web programming that you can use as a reference before searching for the perfect service providers. If this is your first time using third party to do you work, worry not! Sribu has years of experiences that are dedicated to delivering high-quality service that meets your expectations. Not only programming, but Sribu also offers a range of other services, including <a href="https://www.sribu.com/en/mobile-application">mobile apps development</a>, <a href="https://www.sribu.com/en/ecommerce-development">ecommerce development business</a>, <a href="https://www.sribu.com/en/wordpress">professional wordpress development</a>, <a href="https://www.sribu.com/en/bug-fixes">website bug fixes</a>, and <a href="https://www.sribu.com/en/it-support">professional it support</a>. Don\'t hesitate to contact us to learn more about our services and how we can help your business stand out in the crowded digital landscape. Choose Sribu for your design and digital marketing needs, and experience the difference between working with a trusted partner.</p><h3 style="text-align:justify"></h3><!--TITLE-->
</div>
',
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-04 04:10:02',
            ),
            4 => 
            array (
                'id' => 109,
                'kategori_id' => 18,
                'urutan' => 1,
                'nama' => 'Catalog Photography',
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
                'slug' => 'catalog-photography',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            5 => 
            array (
                'id' => 110,
                'kategori_id' => 18,
                'urutan' => 2,
                'nama' => '2D & Animasi',
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
                'slug' => '2d-animasi',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            6 => 
            array (
                'id' => 137,
                'kategori_id' => 19,
                'urutan' => 1,
                'nama' => 'Articles & Blog Posts',
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
                'slug' => 'articles-blog-posts',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            7 => 
            array (
                'id' => 138,
                'kategori_id' => 19,
                'urutan' => 2,
            'nama' => 'Product Description Writing (Bahasa)',
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
                'slug' => 'product-description-writing-bahasa',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            8 => 
            array (
                'id' => 162,
                'kategori_id' => 20,
                'urutan' => 1,
                'nama' => 'Mobile App Marketing',
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
                'slug' => 'mobile-app-marketing',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            9 => 
            array (
                'id' => 163,
                'kategori_id' => 20,
                'urutan' => 2,
                'nama' => 'Youtube Marketing',
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
                'slug' => 'youtube-marketing',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
        ));
        
        
    }
}