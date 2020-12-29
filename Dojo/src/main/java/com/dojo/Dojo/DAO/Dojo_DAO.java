package com.dojo.Dojo.DAO;

import java.util.List;
import java.util.Optional;

import com.dojo.Dojo.Model.Dojo;

public interface Dojo_DAO {
    
    List<Dojo> allDojos();

    Optional<Dojo> getDojo(String name, String city);
    
    int insertDojo (Dojo dojo);

    int deleteDojo(String name, String city);

    int updateDojo (String name, String city, Dojo dojo);
}
