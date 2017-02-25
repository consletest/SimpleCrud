Simple Crud PHP Class using MySQLi OOP

# SimpleCrud

## Set up your Database

```php
public function __construct(){
		$this->db= new mysqli('DB-HOST','DB-USER','DB-PASSWORD','DB-NAME');
	}
```

**Using The Class**
--

**Create**

```php
<?php
include('crud.php');
$lib = new Crud();
$insert = $lib->create('table', array('name'=>'nama','password'=>password)); //table and data array
print_r($insert);
```


**Read**

```php
<?php
include('crud.php');
$lib = new Crud();
$select = $lib->read('table','where id = 1'); //table and attribute
print_r($select);
```
you can clear or change the attribute with what you want


**Update**

```php
<?php
include('crud.php');
$lib = new Crud();
$apdet = $lib->update('table', array('name'=>'nama','password'=>password),'id','1');
print_r($apdet);
```
UPDATE `table` SET $field WHERE id = 1

**Delete**

```php
<?php
include('crud.php');
$lib = new Crud();
$delete = $lib->delete('table','where id = 1'); //table and attribute
print_r($delete);
```
you can clear or change the attribute with what you want
