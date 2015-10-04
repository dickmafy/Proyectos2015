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
    @NamedQuery(name = "Seguridadgrado.findAll", query = "SELECT s FROM Seguridadgrado s")})
public class Seguridadgrado implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CGRADO_CODIGO")
    private String cgradoCodigo;
    @Column(name = "VGRADO_DSC_CORTA")
    private String vgradoDscCorta;
    @Column(name = "VGRADO_DSC_LARGA")
    private String vgradoDscLarga;

    public Seguridadgrado() {
    }

    public Seguridadgrado(String cgradoCodigo) {
        this.cgradoCodigo = cgradoCodigo;
    }

    public String getCgradoCodigo() {
        return cgradoCodigo;
    }

    public void setCgradoCodigo(String cgradoCodigo) {
        this.cgradoCodigo = cgradoCodigo;
    }

    public String getVgradoDscCorta() {
        return vgradoDscCorta;
    }

    public void setVgradoDscCorta(String vgradoDscCorta) {
        this.vgradoDscCorta = vgradoDscCorta;
    }

    public String getVgradoDscLarga() {
        return vgradoDscLarga;
    }

    public void setVgradoDscLarga(String vgradoDscLarga) {
        this.vgradoDscLarga = vgradoDscLarga;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cgradoCodigo != null ? cgradoCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadgrado)) {
            return false;
        }
        Seguridadgrado other = (Seguridadgrado) object;
        if ((this.cgradoCodigo == null && other.cgradoCodigo != null) || (this.cgradoCodigo != null && !this.cgradoCodigo.equals(other.cgradoCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadgrado[ cgradoCodigo=" + cgradoCodigo + " ]";
    }
    
}
