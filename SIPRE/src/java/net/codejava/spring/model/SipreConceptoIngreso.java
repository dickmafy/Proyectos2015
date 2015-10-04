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
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
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
@Table(name = "SIPRE_CONCEPTO_INGRESO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreConceptoIngreso.findAll", query = "SELECT s FROM SipreConceptoIngreso s")})
public class SipreConceptoIngreso implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CCI_CODIGO")
    private String cciCodigo;
    @Column(name = "CCI_COD_DESTINO")
    private String cciCodDestino;
    @Column(name = "VCI_DSC_LARGA")
    private String vciDscLarga;
    @Column(name = "VCI_DSC_CORTA")
    private String vciDscCorta;
    @Column(name = "CCI_COD_MEF")
    private String cciCodMef;
    @JoinColumn(name = "CTP_CODIGO", referencedColumnName = "CTP_CODIGO")
    @ManyToOne
    private SipreTipoPlanilla ctpCodigo;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreConceptoIngreso")
    private List<SipreIngresoGrado> sipreIngresoGradoList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreConceptoIngreso")
    private List<SiprePlanillaDetalle> siprePlanillaDetalleList;

    public SipreConceptoIngreso() {
    }

    public SipreConceptoIngreso(String cciCodigo) {
        this.cciCodigo = cciCodigo;
    }

    public String getCciCodigo() {
        return cciCodigo;
    }

    public void setCciCodigo(String cciCodigo) {
        this.cciCodigo = cciCodigo;
    }

    public String getCciCodDestino() {
        return cciCodDestino;
    }

    public void setCciCodDestino(String cciCodDestino) {
        this.cciCodDestino = cciCodDestino;
    }

    public String getVciDscLarga() {
        return vciDscLarga;
    }

    public void setVciDscLarga(String vciDscLarga) {
        this.vciDscLarga = vciDscLarga;
    }

    public String getVciDscCorta() {
        return vciDscCorta;
    }

    public void setVciDscCorta(String vciDscCorta) {
        this.vciDscCorta = vciDscCorta;
    }

    public String getCciCodMef() {
        return cciCodMef;
    }

    public void setCciCodMef(String cciCodMef) {
        this.cciCodMef = cciCodMef;
    }

    public SipreTipoPlanilla getCtpCodigo() {
        return ctpCodigo;
    }

    public void setCtpCodigo(SipreTipoPlanilla ctpCodigo) {
        this.ctpCodigo = ctpCodigo;
    }

    @XmlTransient
    public List<SipreIngresoGrado> getSipreIngresoGradoList() {
        return sipreIngresoGradoList;
    }

    public void setSipreIngresoGradoList(List<SipreIngresoGrado> sipreIngresoGradoList) {
        this.sipreIngresoGradoList = sipreIngresoGradoList;
    }

    @XmlTransient
    public List<SiprePlanillaDetalle> getSiprePlanillaDetalleList() {
        return siprePlanillaDetalleList;
    }

    public void setSiprePlanillaDetalleList(List<SiprePlanillaDetalle> siprePlanillaDetalleList) {
        this.siprePlanillaDetalleList = siprePlanillaDetalleList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cciCodigo != null ? cciCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreConceptoIngreso)) {
            return false;
        }
        SipreConceptoIngreso other = (SipreConceptoIngreso) object;
        if ((this.cciCodigo == null && other.cciCodigo != null) || (this.cciCodigo != null && !this.cciCodigo.equals(other.cciCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreConceptoIngreso[ cciCodigo=" + cciCodigo + " ]";
    }
    
}
