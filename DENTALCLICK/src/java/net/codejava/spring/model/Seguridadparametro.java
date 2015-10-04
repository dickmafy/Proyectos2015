/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.util.List;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Seguridadparametro.findAll", query = "SELECT s FROM Seguridadparametro s")})
public class Seguridadparametro implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CPD_CODIGO")
    private String cpdCodigo;
    @Column(name = "VPD_DSC")
    private String vpdDsc;
    @OneToMany(mappedBy = "cpdCodigo")
    private List<Seguridadparametrodetalle> seguridadparametrodetalleList;

    public Seguridadparametro() {
    }

    public Seguridadparametro(String cpdCodigo) {
        this.cpdCodigo = cpdCodigo;
    }

    public String getCpdCodigo() {
        return cpdCodigo;
    }

    public void setCpdCodigo(String cpdCodigo) {
        this.cpdCodigo = cpdCodigo;
    }

    public String getVpdDsc() {
        return vpdDsc;
    }

    public void setVpdDsc(String vpdDsc) {
        this.vpdDsc = vpdDsc;
    }

    public List<Seguridadparametrodetalle> getSeguridadparametrodetalleList() {
        return seguridadparametrodetalleList;
    }

    public void setSeguridadparametrodetalleList(List<Seguridadparametrodetalle> seguridadparametrodetalleList) {
        this.seguridadparametrodetalleList = seguridadparametrodetalleList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cpdCodigo != null ? cpdCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadparametro)) {
            return false;
        }
        Seguridadparametro other = (Seguridadparametro) object;
        if ((this.cpdCodigo == null && other.cpdCodigo != null) || (this.cpdCodigo != null && !this.cpdCodigo.equals(other.cpdCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadparametro[ cpdCodigo=" + cpdCodigo + " ]";
    }
    
}
