<?php
class Receipt
{
    private string $purchaseref;
    private float $amount;
    private string $currency;
    private string $status;
    private string $clientid;
    private string $cname;
    private string $mobile;
    private string $paymentref;
    private string $payid;
    private string $ipaddr;
    private string $error;
    private string $reason;

    /**
     * Receipt constructor.
     * @param string $purchaseref
     * @param float $amount
     * @param string $currency
     * @param string $status
     * @param string $clientid
     * @param string $cname
     * @param string $mobile
     * @param string $paymentref
     * @param string $payid
     * @param string $ipaddr
     * @param string $error
     * @param string $reason
     */
    public function __construct(string $purchaseref, float $amount, string $currency, string $status, string $clientid, string $cname, string $mobile, string $paymentref, string $payid, string $ipaddr, string $error, string $reason)
    {
        $this->purchaseref = $purchaseref;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->status = $status;
        $this->clientid = $clientid;
        $this->cname = $cname;
        $this->mobile = $mobile;
        $this->paymentref = $paymentref;
        $this->payid = $payid;
        $this->ipaddr = $ipaddr;
        $this->error = $error;
        $this->reason = $reason;
    }


    /**
     * @return string
     */
    public function getPurchaseref(): string
    {
        return $this->purchaseref;
    }

    /**
     * @param string $purchaseref
     */
    public function setPurchaseref(string $purchaseref): void
    {
        $this->purchaseref = $purchaseref;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getClientid(): string
    {
        return $this->clientid;
    }

    /**
     * @param string $clientid
     */
    public function setClientid(string $clientid): void
    {
        $this->clientid = $clientid;
    }

    /**
     * @return string
     */
    public function getCname(): string
    {
        return $this->cname;
    }

    /**
     * @param string $cname
     */
    public function setCname(string $cname): void
    {
        $this->cname = $cname;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getPaymentref(): string
    {
        return $this->paymentref;
    }

    /**
     * @param string $paymentref
     */
    public function setPaymentref(string $paymentref): void
    {
        $this->paymentref = $paymentref;
    }

    /**
     * @return string
     */
    public function getPayid(): string
    {
        return $this->payid;
    }

    /**
     * @param string $payid
     */
    public function setPayid(string $payid): void
    {
        $this->payid = $payid;
    }

    /**
     * @return string
     */
    public function getIpaddr(): string
    {
        return $this->ipaddr;
    }

    /**
     * @param string $ipaddr
     */
    public function setIpaddr(string $ipaddr): void
    {
        $this->ipaddr = $ipaddr;
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError(string $error): void
    {
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }



}
