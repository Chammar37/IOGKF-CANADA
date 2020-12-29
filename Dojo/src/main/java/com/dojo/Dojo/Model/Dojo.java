package com.dojo.Dojo.Model;

import com.fasterxml.jackson.annotation.JsonProperty;

public class Dojo {
    private String name;
    private String province;
    private String city;
    private String address;
    private String ChiefInstructor;
    private String Phone;
    private String email;

    public Dojo (@JsonProperty("name") String name) {
        this.name = name;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getProvince() {
        return province;
    }

    public void setProvince(String province) {
        this.province = province;
    }

    public String getCity() {
        return city;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getChiefInstruc() {
        return ChiefInstructor;
    }

    public void setChiefInstruc(String chiefInstruc) {
        ChiefInstructor = chiefInstruc;
    }

    public String getPhone() {
        return Phone;
    }

    public void setPhone(String phone) {
        Phone = phone;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

}
