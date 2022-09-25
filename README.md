# Mage2 Module Nadeem RegionBasedProducts

 - Unzip the zip file in `app/code/Nadeem`
 - 
 
 # Magento2 Preventy Add To Cart
Magento2 extension to prevent add to cart action if customer is not logged in.

## Features:
1. To show products based on customer loaction at Product List Page.
2. Fetchung customer's address informations from IP address. Filtering List based on Product Attribute.
2. Looks like core functionality of Magento (at backend as well as frontend)
3. Unencrypted code for easy customization.

# Installation Instruction

* Copy the content of the repo to the <b>app/code/Nadeem//</b> folder
* Enable the module by running `php bin/magento module:enable Nadeem_RegionBasedProducts`
* Run command:
<b>php bin/magento setup:upgrade</b>
* Run Command:
<b>php bin/magento setup:static-content:deploy</b>
* Now Flush Cache: <b>php bin/magento cache:flush</b>

# Contribution

Want to contribute to this extension? The quickest way is to <a href="https://help.github.com/articles/about-pull-requests/">open a pull request</a> on GitHub.

# Screenshots & Support

If you encounter any problems or bugs, please <a href="https://github.com/mageprince/magento2-prevent-add-to-cart/issues">open an issue</a> on GitHub.

<b>Product Details Page in Admin</b>
![ScreenShot](https://github.com/inadeemkhan/magento2-images/blob/master/RBP-Admin-2.png)

<b>Product List Page</b>
![ScreenShot](https://github.com/inadeemkhan/magento2-images/blob/master/RBP-Admin.png)

## Prerequisites

### Use the following table to verify you have the correct prerequisites to install this Extension.
<table>
	<tbody>
		<tr>
			<th>Prerequisite</th>
			<th>How to check</th>
			<th>For more information</th>
		</tr>
	<tr>
		<td>Apache 2.2 or 2.4</td>
		<td>Ubuntu: <code>apache2 -v</code><br>
		CentOS: <code>httpd -v</code></td>
		<td><a href="https://devdocs.magento.com/guides/v2.2/install-gde/prereq/apache.html">Apache</a></td>
	</tr>
	<tr>
		<td>PHP 7.*.*</td>
		<td><code>php -v</code></td>
		<td><a href="http://devdocs.magento.com/guides/v2.2/install-gde/prereq/php-ubuntu.html">PHP Ubuntu</a><br><a href="http://devdocs.magento.com/guides/v2.2/install-gde/prereq/php-centos.html">PHP CentOS</a></td>
	</tr>
	<tr><td>MySQL 5.6.x</td>
	<td><code>mysql -u [root user name] -p</code></td>
	<td><a href="http://devdocs.magento.com/guides/v2.2/install-gde/prereq/mysql.html">MySQL</a></td>
	</tr>
</tbody>
</table>

### Feedback and Support 

<a href="mailto:khannadeem243@gmail.com">khannadeem243@gmail.com</a>
