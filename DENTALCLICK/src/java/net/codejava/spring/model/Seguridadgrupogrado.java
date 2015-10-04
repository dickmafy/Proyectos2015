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
    @NamedQuery(name = "Seguridadgrupogrado.findAll", query = "SELECT s FROM Seguridadgrupogrado s")})
public class Seguridadgrupogrado implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CGG_CODIGO")
    private String cggCodigo;
    @Column(name = "CGG_TIPO_PERSONA")
    private Character cggTipoPersona;
    @Column(name = "VGG_DSC_CORTA")
    private String vggDscCorta;
    @Column(name = "VGG_DSC_LARGA")
    private String vggDscLarga;

    public Seguridadgrupogrado() {
    }

    public Seguridadgrupogrado(String cggCodigo) {
        this.cggCodigo = cggCodigo;
    }

    public String getCggCodigo() {
        return cggCodigo;
    }

    public void setCggCodigo(String cggCodigo) {
        this.cggCodigo = cggCodigo;
    }

    public Character getCggTipoPersona() {
        return cggTipoPersona;
    }

    public void setCggTipoPersona(Character cggTipoPersona) {
        this.cggTipoPersona = cggTipoPersona;
    }

    public String getVggDscCorta() {
        return vggDscCorta;
    }

    public void setVggDscCorta(String vggDscCorta) {
        this.vggDscCorta = vggDscCorta;
    }

    public String getVggDscLarga() {
        return vggDscLarga;
    }

    public void setVggDscLarga(String vggDscLarga) {
        this.vggDscLarga = vggDscLarga;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cggCodigo != null ? cggCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadgrupogrado)) {
            return false;
        }
        Seguridadgrupogrado other = (Seguridadgrupogrado) object;
        if ((this.cggCodigo == null && other.cggCodigo != null) || (this.cggCodigo != null && !this.cggCodigo.equals(other.cggCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadgrupogrado[ cggCodigo=" + cggCodigo + " ]";
    }
    
}
