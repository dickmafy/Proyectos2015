/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
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
    @NamedQuery(name = "Seguridadestadocivil.findAll", query = "SELECT s FROM Seguridadestadocivil s")})
public class Seguridadestadocivil implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CEC_CODIGO")
    private String cecCodigo;
    @Column(name = "CEC_IND_COB")
    private Character cecIndCob;
    @Column(name = "VEC_DSC")
    private String vecDsc;

    public Seguridadestadocivil() {
    }

    public Seguridadestadocivil(String cecCodigo) {
        this.cecCodigo = cecCodigo;
    }

    public String getCecCodigo() {
        return cecCodigo;
    }

    public void setCecCodigo(String cecCodigo) {
        this.cecCodigo = cecCodigo;
    }

    public Character getCecIndCob() {
        return cecIndCob;
    }

    public void setCecIndCob(Character cecIndCob) {
        this.cecIndCob = cecIndCob;
    }

    public String getVecDsc() {
        return vecDsc;
    }

    public void setVecDsc(String vecDsc) {
        this.vecDsc = vecDsc;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cecCodigo != null ? cecCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadestadocivil)) {
            return false;
        }
        Seguridadestadocivil other = (Seguridadestadocivil) object;
        if ((this.cecCodigo == null && other.cecCodigo != null) || (this.cecCodigo != null && !this.cecCodigo.equals(other.cecCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadestadocivil[ cecCodigo=" + cecCodigo + " ]";
    }
    
}
