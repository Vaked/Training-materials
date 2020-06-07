<?php 

class Collection implements IteratorAggregate
{
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }
}

class User
{
    public $email;
}

$firstUser = new User;
$firstUser->email = 'javaguy@gmail.com ';

$secondUser = new User;
$secondUser->email = 'phpguy@gmail.com ';

$thirdUser = new User;
$thirdUser->email = "c#guy@gmail.com ";

$usersCollection = new Collection([$firstUser, $secondUser, $thirdUser]);
$usersArray = [$firstUser, $secondUser, $thirdUser];

function iteration(iterable $iterators)
{
    foreach ($iterators as $user) {
        echo $user->email;
    }
}

iteration($usersCollection);
// iteration($usersArray);