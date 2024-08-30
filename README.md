![cmlogo_transp](https://github.com/nightflyza/ChartMancer/assets/1496954/7dffd749-f232-4cd5-acb7-0cbd47903ab3)

# ChartMancer

ChartMancer class automates the generation of graphs based on data provided in an array. 
It utilizes the GD library to create visually appealing charts, allowing developers to easily 
visualize and display data trends. With ChartMancer, you can customize various aspects of the 
graph, such as colors, labels, and other chart properties, providing a versatile tool 
for data representation in PHP applications.


## Description

- Minimalistic
- Generates bar charts based on simple array datasets
- Automatically adjusts chart properties to fit data
- Outputs charts into browser or saves into files
- Easy customizable

## Requirements

- PHP >=5.3 (PHP 7.4, 8.2, 8.3 is also compatible)
- GD Library
- Mbstring extension

## Usage

### Minimal example

```php

$cm=new ChartMancer();

$data=array('Mon'=>8,'Tue'=>4,'Wed'=>7,'Thu'=>3,'Fri'=>6,'Sat'=>4,'Sun'=>0);

$cm->renderChart($data);

```

![basic0](https://github.com/nightflyza/ChartMancer/assets/1496954/d6ff2530-3876-40b4-aefe-cb3676a343b9)

### Nested data example

```php

    $data = array();
    for ($i = 0; $i <= 249; $i++) {
        $data[$i] = array(rand(0, 129), rand(0, 79), rand(0, 54), rand(0, 4));
    }

$cm=new ChartMancer();
$cm->renderChart($data);

```

![basic1](https://github.com/nightflyza/ChartMancer/assets/1496954/f8e0a742-ecfd-4037-94f4-fd707792697d)

### Large dataset with custom palette

```php
$legend=array('Total','Disk 1','Disk 2','Disk 3','Disk 4','Disk 5','Disk 6');
$chartMancer->setDebug(true);
$chartMancer->setDrawFirstColumn(true);
$chartMancer->setChartLegend($legend);
$chartMancer->setPalette('0-M-G!!!');
$chartMancer->setChartTitle('Disks IO');
$chartMancer->setChartYaxisName('w/s');

$chartMancer->renderChart($data);
```

![cmdio](https://github.com/user-attachments/assets/db60757e-ec5b-410b-8814-8e10e77887cb)

### Acid trip example

![basic3](https://github.com/nightflyza/ChartMancer/assets/1496954/5275a93f-03e4-4895-b29f-e39927a74e5d)


### Practical usage examples

![of1](https://github.com/user-attachments/assets/50dd0afb-0a42-498a-90b0-b32b81d247dd)

![of2](https://github.com/user-attachments/assets/9e755adb-ca1b-4e68-8e87-d35c68646eaa)

![of3](https://github.com/user-attachments/assets/147de90b-0ef4-409e-ac22-7e4088bbe458)


## Full class description

[can be found here](https://ubilling.net.ua/api_doc/classes/ChartMancer.xhtml)

## Installation

The recommended method of installing this library is via [Composer](https://packagist.org/packages/chartmancer/chartmancer)

### Terminal

```bash
composer require chartmancer/chartmancer
```

## License

MIT
