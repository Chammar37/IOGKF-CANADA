package com.dojo.Dojo.DAO;

import java.util.ArrayList;
import java.util.List;

import com.dojo.Dojo.Model.Dojo;

import org.springframework.stereotype.Repository;

@Repository("dojo_data")
public class Dojo_DAO_DA implements Dojo_DAO {

    private static List<Dojo> DB = new ArrayList<>();

    @Override
    public int insertDojo(Dojo dojo) {
        DB.add(dojo);
        return 1;
    }

    @Override
    public List<Dojo> allDojos() {
        return DB;
    }
    
}
