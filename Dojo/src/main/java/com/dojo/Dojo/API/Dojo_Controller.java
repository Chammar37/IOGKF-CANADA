package com.dojo.Dojo.API;

import java.util.List;
import java.util.Optional;

import com.dojo.Dojo.Model.Dojo;
import com.dojo.Dojo.Service.Dojo_Service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.bind.annotation.RequestParam;


@RequestMapping("api/dojo")
@RestController
public class Dojo_Controller {
    
    private final Dojo_Service services;
    
    @Autowired
    public Dojo_Controller(Dojo_Service dojo_Service){
        this.services = dojo_Service;
    }

    @GetMapping
    public List<Dojo> getAllDojo() {
        return services.getAllDojo();
    }

    @PostMapping
    public void insertDojo (@RequestBody Dojo dojo) {
        this.services.insertDojo(dojo);
    }

    @GetMapping (path = "{name}/{city}")
    public Optional<Dojo> getDojo(@PathVariable("name") String name, @PathVariable("city") String city) {
        return this.services.getDojo(name, city);
    }

    @DeleteMapping(path = "{name}/{city}")
    public void deleteDojo(@PathVariable("name") String name, @PathVariable("city") String city) {
        this.services.deleteDojo(name, city);
    }
        
}
