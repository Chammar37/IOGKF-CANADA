package com.dojo.Dojo.Service;

import com.dojo.Dojo.DAO.Dojo_DAO;
import com.dojo.Dojo.Model.Dojo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.stereotype.Service;

@Service
public class Dojo_Service {

    private final Dojo_DAO dojoDAO;

    @Autowired
    public Dojo_Service(@Qualifier("data_access") Dojo_DAO dao) {
        this.dojoDAO = dao;
    }

    public int insertDojo (Dojo dojo) {
        return dojoDAO.insertDojo(dojo);
    }
}
