<?php

class InsufficientFundsException extends Exception
{
    //
}

class HardDeclineException extends Exception
{
    //
}

class SecurityViolationException extends Exception
{
    //
}

class PaymentMethodNotSupportedException extends Exception
{
    //
}

class PayPal
{
    public function charge($token)
    {
        if (true) {
            throw new PaymentMethodNotSupportedException();
        } else {
            throw new InsufficientFundsException();
        }
    }
}

$gateway = new PayPal;

$error = null;

// try {
//     $gateway->charge('123');
// } catch (InsufficientFundsException $error) {
//     $error = "Sorry, there has been an issue with the service, payment declined";
// } catch (HardDeclineException $error) {
//     $error = "Sorry, there has been an issue with the service, payment declined";
// } catch (SecurityViolationException $error) {
//     $error = "Sorry, there has been an issue with the service, payment declined";
// } catch (PaymentMethodNotSupportedException $error) {
//     $error = "Sorry, we do not accept that card";
// }

try {
    $gateway->charge('123');
} catch (InsufficientFundsException | HardDeclineException | SecurityViolationException $error) {
    $error = "Sorry, there has been an issue with the service, payment declined";
} catch (PaymentMethodNotSupportedException $error) {
    $error = "Sorry, we do not accept that card";
}

die('redirect with error: ' . $error);
