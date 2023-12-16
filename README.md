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

- PHP >=5.3 (PHP 7.4, 8.2 also compatible)
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

### Acid trip example

![basic3](https://github.com/nightflyza/ChartMancer/assets/1496954/5275a93f-03e4-4895-b29f-e39927a74e5d)

## Installation with [composer](https://getcomposer.org)

The recommended method of installing this library is via [Composer](https://packagist.org/packages/chartmancer/chartmancer)

### Terminal

```bash
composer require chartmancer/chartmancer
```


## License

MIT
