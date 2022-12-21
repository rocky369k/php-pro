<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\Builder;

use phpstormprojects\phpro\Builder\ContactBuilder;

require_once '../vendor/autoload.php';

$Contacts = array();

$first = (new ContactBuilder())
    ->setName('Ivan')
    ->setSurname('Petrov')
    ->setEmail('123@gmail.com')
    ->setPhone('0987364415')
    ->setAddress('Kiyv, Sportivna st.')
    ->build();

array_push($Contacts,$first);

$second = (new ContactBuilder())
    ->setName('Bogdan')
    ->setSurname('')
    ->setEmail('321@gmail.com')
    ->setPhone('')
    ->setAddress('Kiyv, Koltsova st.')
    ->build();

array_push($Contacts,$second);
?>

<table>
    <thead  >
        <th  style="border : 1px solid black; padding : 4px;" >Name</th>
        <th  style="border : 1px solid black; padding : 4px;" >Surname</th>
        <th  style="border : 1px solid black; padding : 4px;" >Email</th>
        <th  style="border : 1px solid black; padding : 4px;">Phone</th>
        <th  style="border : 1px solid black; padding : 4px;">Address</th>
    </thead>
    <tbody>
        <?php foreach($Contacts as $item){ ?>
        <tr  >
            <td style="border : 1px solid black; padding : 4px;" > <?php echo $item->getName(); ?></td>
            <td style="border : 1px solid black; padding : 4px;" > <?php echo $item->getSurname(); ?> </td>
            <td style="border : 1px solid black; padding : 4px;"> <?php echo $item->getEmail(); ?> </td>
            <td style="border : 1px solid black; padding : 4px;"> <?php echo $item->getPhone(); ?> </td>
            <td style="border : 1px solid black; padding : 4px;"> <?php echo $item->getAddress(); ?> </td>
        </tr>
        <?php } ?>
    </tbody>
</table>