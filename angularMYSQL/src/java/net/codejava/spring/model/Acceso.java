/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigInteger;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Acceso.findAll", query = "SELECT a FROM Acceso a")})
public class Acceso implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "pk_perfil")
    private Long pkPerfil;
    @Column(name = "pk_menu")
    private BigInteger pkMenu;
    private BigInteger permiso;

    public Acceso() {
    }

    public Acceso(Long pkPerfil) {
        this.pkPerfil = pkPerfil;
    }

    public Long getPkPerfil() {
        return pkPerfil;
    }

    public void setPkPerfil(Long pkPerfil) {
        this.pkPerfil = pkPerfil;
    }

    public BigInteger getPkMenu() {
        return pkMenu;
    }

    public void setPkMenu(BigInteger pkMenu) {
        this.pkMenu = pkMenu;
    }

    public BigInteger getPermiso() {
        return permiso;
    }

    public void setPermiso(BigInteger permiso) {
        this.permiso = permiso;
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
        if (!(object instanceof Acceso)) {
            return false;
        }
        Acceso other = (Acceso) object;
        if ((this.pkPerfil == null && other.pkPerfil != null) || (this.pkPerfil != null && !this.pkPerfil.equals(other.pkPerfil))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Acceso[ pkPerfil=" + pkPerfil + " ]";
    }
    
}
