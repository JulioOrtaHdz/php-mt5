<?php


namespace JulioOrtaHdz\PhpMeta\Entities;


/**
 * Class User
 * @package JulioOrtaHdz\PhpMeta\Entities
 */
class User
{
    protected $login;
    protected $name;
    protected $email;
    protected $main_password;
    protected $group;
    protected $leverage;
    protected $zip_code;
    protected $country;
    protected $state;
    protected $city;
    protected $address;
    protected $phone;
    protected $phone_password;
    protected $investor_password;
    //Se agregan nuevo campos (Propiedades a la clase de la libreria)
    protected $MQID; //Campo Agregado a la librería
    protected $Company; //Campo Agregado a la librería
    protected $Account; //Campo Agregado a la librería
    protected $Language; //Campo Agregado a la librería
    protected $ClientID; //Campo Agregado a la librería
    protected $ID; //Campo Agregado a la librería
    protected $Status; //Campo Agregado a la librería
    protected $Comment; //Campo Agregado a la librería
    protected $Agent; //Campo Agregado a la librería
    protected $Balance; //Campo Agregado a la librería
    protected $Credit; //Campo Agregado a la librería
    protected $InterestRate; //Campo Agregado a la librería
    protected $CommissionDaily; //Campo Agregado a la librería
    protected $CommissionMonthly; //Campo Agregado a la librería
    protected $LeadCampaign; //Campo Agregado a la librería
    protected $LeadSource; //Campo Agregado a la librería

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMainPassword()
    {
        return $this->main_password;
    }

    public function setMainPassword($main_password)
    {
        $this->main_password = $main_password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLeverage()
    {
        return $this->leverage;
    }


    public function setLeverage($leverage)
    {
        $this->leverage = $leverage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }


    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }


    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }


    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhonePassword()
    {
        return $this->phone_password;
    }


    public function setPhonePassword($phone_password)
    {
        $this->phone_password = $phone_password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvestorPassword()
    {
        return $this->investor_password;
    }

    public function setInvestorPassword($investor_password)
    {
        $this->investor_password = $investor_password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMQID()
    {
        return $this->MQID;
    }

    public function setMQID($MQID)
    {
        $this->MQID = $MQID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->Company;
    }

    public function setCompany($Company)
    {
        $this->Company = $Company;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->Account;
    }

    public function setAccount($Account)
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientID()
    {
        return $this->ClientID;
    }

    public function setClientID($ClientID)
    {
        $this->ClientID = $ClientID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->Status;
    }

    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->Comment;
    }

    public function setComment($Comment)
    {
        $this->Comment = $Comment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAgent()
    {
        return $this->Agent;
    }

    public function setAgent($Agent)
    {
        $this->Agent = $Agent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    public function setBalance($Balance)
    {
        $this->Balance = $Balance;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCredit()
    {
        return $this->Credit;
    }

    public function setCredit($Credit)
    {
        $this->Credit = $Credit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInterestRate()
    {
        return $this->InterestRate;
    }

    public function setInterestRate($InterestRate)
    {
        $this->InterestRate = $InterestRate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommissionDaily()
    {
        return $this->CommissionDaily;
    }

    public function setCommissionDaily($CommissionDaily)
    {
        $this->CommissionDaily = $CommissionDaily;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommissionMonthly()
    {
        return $this->CommissionMonthly;
    }

    public function setCommissionMonthly($CommissionMonthly)
    {
        $this->CommissionMonthly = $CommissionMonthly;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLeadCampaign()
    {
        return $this->LeadCampaign;
    }

    public function setLeadCampaign($LeadCampaign)
    {
        $this->LeadCampaign = $LeadCampaign;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLeadSource()
    {
        return $this->LeadSource;
    }

    public function setLeadSource($LeadSource)
    {
        $this->LeadSource = $LeadSource;
        return $this;
    }

}
