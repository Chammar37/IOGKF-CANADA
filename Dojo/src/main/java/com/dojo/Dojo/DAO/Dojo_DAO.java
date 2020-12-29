package com.dojo.Dojo.DAO;

import java.util.List;

import com.dojo.Dojo.Model.Dojo;

public interface Dojo_DAO {
    
    int insertDojo (Dojo dojo);
    
    List<Dojo> allDojos();
}
