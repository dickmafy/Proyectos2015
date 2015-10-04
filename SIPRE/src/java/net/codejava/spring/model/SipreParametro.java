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
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_PARAMETRO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreParametro.findAll", query = "SELECT s FROM SipreParametro s")})
public class SipreParametro implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CPD_CODIGO")
    private String cpdCodigo;
    @Column(name = "VPD_DSC")
    private String vpdDsc;
    @OneToMany(mappedBy = "cpdCodigo")
    private List<SipreParametroDetalle> sipreParametroDetalleList;

    public SipreParametro() {
    }

    public SipreParametro(String cpdCodigo) {
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

    @XmlTransient
    public List<SipreParametroDetalle> getSipreParametroDetalleList() {
        return sipreParametroDetalleList;
    }

    public void setSipreParametroDetalleList(List<SipreParametroDetalle> sipreParametroDetalleList) {
        this.sipreParametroDetalleList = sipreParametroDetalleList;
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
        if (!(object instanceof SipreParametro)) {
            return false;
        }
        SipreParametro other = (SipreParametro) object;
        if ((this.cpdCodigo == null && other.cpdCodigo != null) || (this.cpdCodigo != null && !this.cpdCodigo.equals(other.cpdCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreParametro[ cpdCodigo=" + cpdCodigo + " ]";
    }
    
}
