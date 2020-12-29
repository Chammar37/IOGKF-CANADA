package com.dojo.Dojo.DAO;

import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

import com.dojo.Dojo.Model.Dojo;

import org.springframework.stereotype.Repository;

@Repository("dojo_data")
public class Dojo_DAO_DA implements Dojo_DAO {

    private static List<Dojo> DB = new ArrayList<>();

    @Override
    public List<Dojo> allDojos() {
        return DB;
    }

    @Override
    public int insertDojo(Dojo dojo) {
        DB.add(dojo);
        return 1;
    }

    @Override
    public  Optional<Dojo> getDojo(String name, String city) {
       return DB.stream().filter(dojo -> dojo.getName().equals(name) && dojo.getCity().equals(city)).findFirst();
    }

    @Override
    public int deleteDojo(String name, String city) {
        Optional<Dojo> dojo = getDojo(name, city);

       if (!dojo.isEmpty()) {
            DB.remove(dojo.get());
            return 1;
       }
       return 0;
    }
    
}
