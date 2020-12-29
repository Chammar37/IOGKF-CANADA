package com.dojo.Dojo.Service;

import java.util.List;
import java.util.Optional;

import com.dojo.Dojo.DAO.Dojo_DAO;
import com.dojo.Dojo.Model.Dojo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.stereotype.Service;

@Service
public class Dojo_Service {

    private final Dojo_DAO dojoDAO;

    @Autowired
    public Dojo_Service(@Qualifier("dojo_data") Dojo_DAO dao) {
        this.dojoDAO = dao;
    }

    public List<Dojo> getAllDojo() {
        return dojoDAO.allDojos();
    }

    public int insertDojo (Dojo dojo) {
        return dojoDAO.insertDojo(dojo);
    }

    public Optional<Dojo> getDojo (String name, String city) {
        return dojoDAO.getDojo(name, city);
    }

    public int deleteDojo(String name, String city) {
        return dojoDAO.deleteDojo(name, city);
    }
    
}
