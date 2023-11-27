# ChartMancer

ChartMancer class automates the generation of graphs based on data provided in an array. 
It utilizes the GD library to create visually appealing charts, allowing developers to easily 
visualize and display data trends. With ChartMancer, you can customize various aspects of the 
graph, such as colors, labels, and other chart properties, providing a versatile tool 
for data representation in PHP applications.


## Description

- Generates bar charts based on simple array datasets
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

## Installation

The recommended method of installing this library is via Composer: (https://packagist.org/packages/chartmancer/chartmancer)

```bash
$ composer require chartmancer/chartmancer
```


## License

MIT