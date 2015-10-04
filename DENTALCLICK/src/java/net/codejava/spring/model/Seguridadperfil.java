/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.util.List;
import javax.persistence.Basic;
import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.OneToOne;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Seguridadperfil.findAll", query = "SELECT s FROM Seguridadperfil s")})
public class Seguridadperfil implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    private Long pkPerfil;
    private Integer esta;
    private String nomb;
    @OneToMany(mappedBy = "fkPerfil")
    private List<Seguridadusuario> seguridadusuarioList;
    @OneToOne(cascade = CascadeType.ALL, mappedBy = "seguridadperfil")
    private Seguridadpersona seguridadpersona;

    public Seguridadperfil() {
    }

    public Seguridadperfil(Long pkPerfil) {
        this.pkPerfil = pkPerfil;
    }

    public Long getPkPerfil() {
        return pkPerfil;
    }

    public void setPkPerfil(Long pkPerfil) {
        this.pkPerfil = pkPerfil;
    }

    public Integer getEsta() {
        return esta;
    }

    public void setEsta(Integer esta) {
        this.esta = esta;
    }

    public String getNomb() {
        return nomb;
    }

    public void setNomb(String nomb) {
        this.nomb = nomb;
    }

    public List<Seguridadusuario> getSeguridadusuarioList() {
        return seguridadusuarioList;
    }

    public void setSeguridadusuarioList(List<Seguridadusuario> seguridadusuarioList) {
        this.seguridadusuarioList = seguridadusuarioList;
    }

    public Seguridadpersona getSeguridadpersona() {
        return seguridadpersona;
    }

    public void setSeguridadpersona(Seguridadpersona seguridadpersona) {
        this.seguridadpersona = seguridadpersona;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (pkPerfil != null ? pkPerfil.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadperfil)) {
            return false;
        }
        Seguridadperfil other = (Seguridadperfil) object;
        if ((this.pkPerfil == null && other.pkPerfil != null) || (this.pkPerfil != null && !this.pkPerfil.equals(other.pkPerfil))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadperfil[ pkPerfil=" + pkPerfil + " ]";
    }
    
}
