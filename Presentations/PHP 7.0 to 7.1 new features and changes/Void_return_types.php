<?php

// function returnsInteger(): void {
//     return 1; 
// }

// function returnsNull(): void {
//     return null; 
// }

function returnsVoid(): void {
    // valid
}

function emptyReturn(): void {
    return; // valid
}

var_dump(returnsVoid());
var_dump(emptyReturn());

// In PHP Void type === NULL

// Some people have asked about this, since return; and return null; are technically equivalent in PHP; 
// when a return value isn't specified, PHP will produce null for you. However, choosing one over the 
// other suggests intent. If you specify a value, it suggests the value is significant. In a void function,
// the return value is insignificant: it's always the same and has no actual usefulness. Specifying it explicitly with return null;
// is pointless, because it doesn't really matter what value the function is going to return.

// Since void signifies an unimportant return value that won't be used, this proposal requires you to not specify one.
// This extends to null just as it does to any other value.